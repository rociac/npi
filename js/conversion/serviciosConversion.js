function gtag_report_conversion(url) { 
  var callback = function () { if (typeof(url) != 'undefined') { window.location = url; } }; 
  gtag('event', 'conversion', { 'send_to': 'AW-459925964/Z39sCN3s5e8BEMzTp9sB', 'event_callback': callback }); 
  return false; 
}