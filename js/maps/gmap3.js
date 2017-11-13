(function($)
{$.fn.gMap=function(options,methods_options)
{switch(options)
{case'addMarker':return $(this).trigger('gMap.addMarker',[methods_options.latitude,methods_options.longitude,methods_options.content,methods_options.icon,methods_options.popup]);case'centerAt':return $(this).trigger('gMap.centerAt',[methods_options.latitude,methods_options.longitude,methods_options.zoom]);case'clearMarkers':return $(this).trigger('gMap.clearMarkers');}
var opts=$.extend({},$.fn.gMap.defaults,options);return this.each(function()
{var $gmap=new google.maps.Map(this);$(this).data('gMap.reference',$gmap);var $geocoder=new google.maps.Geocoder();if(opts.address)
{$geocoder.geocode({address:opts.address},function(gresult,status)
{if(gresult&&gresult.length){$gmap.setCenter(gresult[0].geometry.location);}});}else{if(opts.latitude&&opts.longitude)
{$gmap.setCenter(new google.maps.LatLng(opts.latitude,opts.longitude));}
else
{if($.isArray(opts.markers)&&opts.markers.length>0)
{if(opts.markers[0].address)
{$geocoder.geocode({address:opts.markers[0].address},function(gresult,status)
{if(gresult&&gresult.length>0){$gmap.setCenter(gresult[0].geometry.location);}});}else{$gmap.setCenter(new google.maps.LatLng(opts.markers[0].latitude,opts.markers[0].longitude));}}else{$gmap.setCenter(new google.maps.LatLng(34.885931,9.84375));}}}
$gmap.setZoom(opts.zoom);$gmap.setMapTypeId(google.maps.MapTypeId[opts.maptype]);var map_options={scrollwheel:opts.scrollwheel,disableDoubleClickZoom:!opts.doubleclickzoom};if(opts.controls===false){$.extend(map_options,{disableDefaultUI:true});}else if(opts.controls.length!==0){$.extend(map_options,opts.controls,{disableDefaultUI:true});}
$gmap.setOptions(map_options);var gicon=new google.maps.Marker();var marker_icon;var marker_shadow;marker_icon=new google.maps.MarkerImage(opts.icon.image);marker_icon.size=new google.maps.Size(opts.icon.iconsize[0],opts.icon.iconsize[1]);marker_icon.anchor=new google.maps.Point(opts.icon.iconanchor[0],opts.icon.iconanchor[1]);gicon.setIcon(marker_icon);if(opts.icon.shadow)
{marker_shadow=new google.maps.MarkerImage(opts.icon.shadow);marker_shadow.size=new google.maps.Size(opts.icon.shadowsize[0],opts.icon.shadowsize[1]);marker_shadow.anchor=new google.maps.Point(opts.icon.shadowanchor[0],opts.icon.shadowanchor[1]);gicon.setShadow(marker_shadow);}
$(this).bind('gMap.centerAt',function(e,latitude,longitude,zoom)
{if(zoom){$gmap.setZoom(zoom);}
$gmap.panTo(new google.maps.LatLng(parseFloat(latitude),parseFloat(longitude)));});var overlays=[];$(this).bind('gMap.clearMarkers',function()
{while(overlays[0]){overlays.pop().setMap(null);}});var last_infowindow;$(this).bind('gMap.addMarker',function(e,latitude,longitude,content,icon,popup)
{var marker_icon;var marker_shadow;var glatlng=new google.maps.LatLng(parseFloat(latitude),parseFloat(longitude));var gmarker=new google.maps.Marker({position:glatlng});if(icon)
{marker_icon=new google.maps.MarkerImage(icon.image);marker_icon.size=new google.maps.Size(icon.iconsize[0],icon.iconsize[1]);marker_icon.anchor=new google.maps.Point(icon.iconanchor[0],icon.iconanchor[1]);gmarker.setIcon(marker_icon);if(icon.shadow)
{marker_shadow=new google.maps.MarkerImage(icon.shadow);marker_shadow.size=new google.maps.Size(icon.shadowsize[0],icon.shadowsize[1]);marker_shadow.anchor=new google.maps.Point(icon.shadowanchor[0],icon.shadowanchor[1]);gicon.setShadow(marker_shadow);}}else{gmarker.setIcon(gicon.getIcon());gmarker.setShadow(gicon.getShadow());}
if(content)
{if(content==='_latlng'){content=latitude+', '+ longitude;}
var infowindow=new google.maps.InfoWindow({content:opts.html_prepend+ content+ opts.html_append});google.maps.event.addListener(gmarker,'click',function()
{if(last_infowindow){last_infowindow.close();}
infowindow.open($gmap,gmarker);last_infowindow=infowindow;});if(popup)
{google.maps.event.addListenerOnce($gmap,'tilesloaded',function()
{infowindow.open($gmap,gmarker);});}}
gmarker.setMap($gmap);overlays.push(gmarker);});var marker;var self=this;var geocode_callback=function(marker){return function(gresult,status){if(gresult&&gresult.length>0)
{$(self).trigger('gMap.addMarker',[gresult[0].geometry.location.lat(),gresult[0].geometry.location.lng(),marker.html,marker.icon,marker.popup]);}};};for(var j=0;j<opts.markers.length;j++)
{marker=opts.markers[j];if(marker.address)
{if(marker.html==='_address'){marker.html=marker.address;}
$geocoder.geocode({address:marker.address},geocode_callback(marker));}else{$(this).trigger('gMap.addMarker',[marker.latitude,marker.longitude,marker.html,marker.icon,marker.popup]);}}});};$.fn.gMap.defaults={address:'',latitude:0,longitude:0,zoom:1,markers:[],controls:[],scrollwheel:false,doubleclickzoom:true,maptype:'ROADMAP',html_prepend:'<div class="gmap_marker">',html_append:'</div>',icon:{image:"http://www.google.com/mapfiles/marker.png",shadow:"http://www.google.com/mapfiles/shadow50.png",iconsize:[20,34],shadowsize:[37,34],iconanchor:[9,34],shadowanchor:[6,34]}};})(jQuery);