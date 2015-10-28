<?php //
 header("Pragma: no-cache");
/*************************** Config. *****************************/
$Today = time();
date_default_timezone_set('America/Santiago');
/*************************** Config. *****************************/
function getServerDateItems($inDate) {
	return date('Y,n,j,G,',$inDate).intval(date('i',$inDate)).','.intval(date('s',$inDate));
	// year (4-digit),month,day,hours (0-23),minutes,seconds for scripts
	// use intval to strip leading zero from minutes and seconds
	//   so JavaScript won't try to interpret them in octal
	//   (use intval instead of ltrim, which translates '00' to '')
}
function clockDateString($inDate) {
    return date('l, F j, Y',$inDate);    // eg Tuesday, October 27, 2015 
}
function clockTimeString($inDate, $showSeconds=true) {//etseeeeee
    return date($showSeconds ? 'G:i:s' : 'G:i',$inDate).'';
}
function Months($N){// echo(Months(4)); retorna en 4 meses mas la fecha 2016-02-28 
return date("Y-n-d",strtotime('+'.$N.' Months')) ."\n";
}
function Week($N){// requiere un numero y retorna  iwual que month
return date("Y-m-d",strtotime('+'.$N.' Week')) ."\n";
}
function microtime_int()// retorna 30678700. nanoseconds 
{
	  list($usec, $sec) = explode(".", microtime());
	  usleep(1);
      return ((int)$sec );
}
echo 'Loading..';
?>

<script language="JavaScript" type="text/javascript">
/* set up variables used to init clock in BODY's onLoad handler;
   should be done as early as possible */
var clockLocalStartTime = new Date();
var clockServerStartTime = new Date(<?php echo(getServerDateItems($Today))?>);
var clockIncrementMillis ;
var localTime;
var clockOffset;
var clockExpirationLocal;
var clockShowsSeconds = false;
var clockTimerID = null;
function clockInit(localDateObject, serverDateObject)
{
    var origRemoteClock = parseInt(clockGetCookieData("remoteClock"));
    var origLocalClock = parseInt(clockGetCookieData("localClock"));
    var newRemoteClock = serverDateObject.getTime();
    // May be stale (WinIE); will check against cookie later
    // Can't use the millisec. ctor here because of client inconsistencies.
    var newLocalClock = localDateObject.getTime();
    var maxClockAge = 60 * 60 * 1000;   // get new time from server ever
    if (newRemoteClock != origRemoteClock) {
        // new clocks are up-to-date (newer than any cookies)
        document.cookie = "remoteClock=" + newRemoteClock;
        document.cookie = "localClock=" + newLocalClock;
        clockOffset = newRemoteClock - newLocalClock;
        clockExpirationLocal = newLocalClock + maxClockAge;
        localTime = newLocalClock;  // to keep clockUpdate() happy
    }
    else if (origLocalClock != origLocalClock) {
        // error; localClock cookie is invalid (parsed as NaN)
        clockOffset = null;
        clockExpirationLocal = null;
    }
    else {
        // fall back to clocks in cookies
        clockOffset = origRemoteClock - origLocalClock;
        clockExpirationLocal = origLocalClock + maxClockAge;
        localTime = origLocalClock;
        // so clockUpdate() will reload if newLocalClock
        // is earlier (clock was reset)
    }
    /* Reload page at server midnight to display the new date,
       by expiring the clock then */
    var nextDayLocal = (new Date(serverDateObject.getFullYear(),
            serverDateObject.getMonth(),
            serverDateObject.getDate() + 1)).getTime() - clockOffset;
    if (nextDayLocal < clockExpirationLocal) {
        clockExpirationLocal = nextDayLocal;
    }
}
function clockOnLoad()
{
	clockIncrementMillis = 101;
    clockUpdate();
}
function clockTimeString(inHours, inMinutes, inSeconds,inMilesimas) {
 return inHours === null ? "-:--" : ("<font size='10' face='Arial' ><b><font size='3'>Hora actual:</font></br>" +inHours + (inMinutes < 10 ? ":0" : ":") + inMinutes + (inSeconds < 10 ? ":0" : ":") + inSeconds+"<font size='4'>" +(inMilesimas < 100 ? " 0" : " ") + inMilesimas + "</font>"+ (inHours < 12 ? "AM" : "  PM")+"</b></font>");
   }
function clockDisplayTime(inHours, inMinutes, inSeconds,inMilesimas) {//show the clock
    	 if (document.layers){
        document.layers.liveclock.document.write(clockTimeString(inHours, inMinutes, inSeconds,inMilesimas));
        document.layers.liveclock.document.close();
        }
        else if (document.all)
        liveclock.innerHTML=clockTimeString(inHours, inMinutes, inSeconds,inMilesimas);
        else if (document.getElementById)
        document.getElementById("liveclock").innerHTML=clockTimeString(inHours, inMinutes, inSeconds,inMilesimas);
       }
function clockGetCookieData(label) {
    /* find the value of the specified cookie in the document's
    semicolon-delimited collection. For IE Win98 compatibility, search
    from the end of the string (to find most specific host/path) and
    don't require "=" between cookie name & empty cookie values. Returns
    null if cookie not found. One remaining problem: Under IE 5 [Win98],
    setting a cookie with no equals sign creates a cookie with no name,
    just data, which is indistinguishable from a cookie with that name
    but no data but can't be overwritten by any cookie with an equals
    sign. */
    var c = document.cookie;
    if (c) {
        var labelLen = label.length, cEnd = c.length;
        while (cEnd > 0) {
            var cStart = c.lastIndexOf(';',cEnd-1) + 1;
            /* bug fix to Danny Goodman's code: calculate cEnd, to
            prevent walking the string char-by-char & finding cookie
            labels that contained the desired label as suffixes */
            // skip leading spaces
            while (cStart < cEnd && c.charAt(cStart)===" ") cStart++;
            if (cStart + labelLen <= cEnd && c.substr(cStart,labelLen) === label) {
                if (cStart + labelLen === cEnd) {                
                    return ""; // empty cookie value, no "="
                }
                else if (c.charAt(cStart+labelLen) === "=") {
                    // has "=" after label
                    return unescape(c.substring(cStart + labelLen + 1,cEnd));
                }
            }
            cEnd = cStart - 1;  // skip semicolon
        }
    }
    return null;
}
/* Called regularly to update the clock display as well as onLoad (user
   may have clicked the Back button to arrive here, so the clock would need
   an immediate update) */
function clockUpdate()
{
    var lastLocalTime = localTime;
    localTime = (new Date()).getTime();
    /* Sanity-check the diff. in local time between successive calls;
       reload if user has reset system clock */
    if (clockOffset === null) {
        clockDisplayTime(null, null, null,null);
    }
    else if (localTime < lastLocalTime || clockExpirationLocal < localTime) {
        /* Clock expired, or time appeared to go backward (user reset
           the clock). Reset cookies to prevent infinite reload loop if
           server doesn't give a new time. */
        document.cookie = 'remoteClock=-';
        document.cookie = 'localClock=-';
        location.reload();      // will refresh time values in cookies
    }
    else {
        // Compute what time would be on server 
        var Digital = new Date(localTime + clockOffset);
        clockDisplayTime(Digital.getHours(), Digital.getMinutes(),Digital.getSeconds(),Digital.getMilliseconds());
         // Reschedule this func to run on next even clockIncrementMillis boundary
        clockTimerID = setTimeout("clockUpdate()",clockIncrementMillis - (Digital.getTime() % clockIncrementMillis));
    }
}
/*** End of Clock ***/
//-->
</script>
