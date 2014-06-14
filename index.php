		<div style='display:none;' id="hinvite_help">
				<div style="padding:390px 0 0 125px;">
    		<div style="float:left;width:500px;height:390px;">
    			<div style="background-image:url('https://castleagegame1-a.akamaihd.net/graphics/helpmenu_top.jpg');width:500px;height:60px;">
    			    <div style="padding:15px 0 0 36px;">
        			    <div style="float:left;width:395px;height:25px;text-align:center;overflow:hidden;">
            			    <div style="clear:both"></div>
            			    <div style="color:white;font-size:18px;">CALL OF HEROES HELP</div>
            			    <div style="clear:both"></div>
            			</div>
            			<div style="padding:3px 15px 0 0">
                			<div style="float:right">
                			    		<div style='text-align:right;'>
	        <a href="#" onclick="hidePositionBox(); return false;">		
	            <img  src="https://castleagegame1-a.akamaihd.net/graphics/xbtn.png" />
	        </a>
        </div>
                        			</div>
                		</div>
            		</div>
    			</div>
			
    			<div style="background-image:url('https://castleagegame1-a.akamaihd.net/graphics/helpmenu_middle.jpg');width:500px;height:300px;">
    			    <div style="padding:0 0 0 15px;">
                        <div style="float:left;width:470px;height:300px;text-align:left;overflow-y:auto;">
                            <div style="clear:both"></div>
                            <div style="color:black;font-size:16px;font-family:Times New Roman;">
		<i>Beta Feature</i>
		<br/><br/>
		Recruit your friends to join in battle with you and both of you will get Hero potions to help you in your adventures. Hero Potions can be used from the <a href="https://apps.facebook.com/castle_age/keep.php">Keep Page</a> to restore your stamina to help you battle monsters and duel other players!
		<br/><br/>
		You can also choose to save your Hero Potions to unlock rewards from the <a href="https://apps.facebook.com/castle_age/alchemy.php">Alchemy Page</a>!
		<br/><br/>
		Combine 5 Hero Potions to receive a powerful defensive armor!
		<br/><br/>
		Combine 10 Hero Potions to unlock the Forest Stalker, Kilgore!
		</div>
            			    <div style="clear:both"></div>
            			</div>
        			</div>
    			</div>
            
                <div style="background-image:url('https://castleagegame1-a.akamaihd.net/graphics/helpmenu_bottom.jpg');width:500px;height:30px;overflow:hidden;" ></div>
    		</div>
    	</div>
		</div>	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
	<head>
		<link rel="icon"
		      type="image/png"
		      href="https://castleagegame1-a.akamaihd.net/graphics/Icon_16.jpg" />
			    <script type="text/javascript">
			function PositionAndDisplayPopupBox(fb_js_var, anchor, classname) {

				var posY = 200;
				var posX = 0;
				var popup= $('#'+fb_js_var);
				if(anchor) {
				    var obj = $(anchor);
					var objOffset = obj.offset();
					var oTop= objOffset.top;
					var oLeft= objOffset.left;
					
					var effectivePopWidth = popup.width() - parseFloat(popup.children('div').first().css('padding-left'));
					posX = ($(document).width()/2) - (effectivePopWidth/2) - parseFloat(popup.children('div').first().css('padding-left'));
				    if (posX > ($(document.body).width() - popup.width())) {
				    	posX = $(document.body).width() - popup.width();
				    }

				    posY = oTop + 20 - parseFloat(popup.children('div').first().css('padding-top'));
				    if(posY > ($(document.body).height() - 300)) {
					    posY = $(document.body).height() - 300;
				    }
				}
				
				$('#single_popup_content').html(popup.html());
				$('#single_popup').css('top', Math.floor(posY)+'px');
				$('#single_popup').css('left', Math.floor(posX)+'px');
				$('#single_popup_background').css('height', posY + popup.height() + 100);
				$('#single_popup_background').show();
		        $('#single_popup').show();
				centerCastlepbPopups();
				return false;				
			}
			
			
			function generateAtPageTop(fb_js_var) {
				var curHeight=$('#main_anchor').offset().top + 20;
				var docCenter= $(document).width()/2;
				
				var popup= $('#'+fb_js_var);
				docCenter -= popup.width/2;
				$('#single_popup_content').html(popup.html());
				$('#single_popup').css('top', Math.floor(curHeight)+'px');
				$('#single_popup').css('left', docCenter);
				$('#single_popup_background').show();
		        $('#single_popup').show();
				return false;
			}
			
			function PopupAtMousePosition(event, fb_js_var) {
			    // IE mouse Y position
			    if (event.pageX == null && event.clientX != null ) {
                  var doc = document.documentElement, body = document.body;
                  event.pageY = event.clientY + (doc && doc.scrollTop || body && body.scrollTop || 0) - (doc && doc.clientTop || body && body.clientTop || 0);
                }
			    
				var popup= $('#'+fb_js_var);
				var leftPad = parseFloat(popup.children('div').first().css('padding-left'));
				var effectivePopWidth = popup.width() - leftPad;
				oLeft = event.pageX - effectivePopWidth - leftPad;
				if (oLeft < -leftPad) {
					oLeft = -leftPad;
				}

				var effectivePopHeight = popup.height() - parseFloat(popup.children('div').first().css('padding-top'));
				var oTop = event.pageY - (effectivePopHeight/10000) - parseFloat(popup.children('div').first().css('padding-top'));
				if (oTop > ($(document.body).height() - popup.height())) {
					oTop= $(document.body).height() - popup.height();
				}

				$('#single_popup_content').html(popup.html());
				$('#single_popup').css('top', Math.floor(oTop)+'px');
				$('#single_popup').css('left', oLeft+'px');
				$('#single_popup_background').css('height', '100%');
				$('#single_popup_background').css('position', 'fixed');
				$('#single_popup_background').show();
		        $('#single_popup').show();
				return false;
			}
			
			function PositionAndDisplayPopupAutoCenter(event, fb_js_var) {
			    // IE mouse Y position
			    if (event.pageX == null && event.clientX != null ) {
                  var doc = document.documentElement, body = document.body;
                  event.pageY = event.clientY + (doc && doc.scrollTop || body && body.scrollTop || 0) - (doc && doc.clientTop || body && body.clientTop || 0);
                }
			    
				var curHeight=$(document).scrollTop() + 20;
				var docCenter= $(document).width()/2;
				var popup= $('#'+fb_js_var);
				var oLeft= docCenter - (popup.width()/2);
				var oTop= curHeight + event.clientY - (popup.height()/2);
				$('#single_popup_content').html(popup.html());
				$('#single_popup').css('top', Math.floor(oTop)+'px');
				$('#single_popup').css('left', Math.floor(oLeft)+'px');
				$('#single_popup_background').css('height', event.pageY + (popup.height() * 2));
				$('#single_popup_background').show();
		        $('#single_popup').show();
				return false;
			}
			
			function centerCastlepbPopups() {
				var curHeight=$(document).scrollTop() + 20;
				var docCenter= $(document).width()/2;
				$('.castlepb').each(function() {
					var popup= $(this);
					var oLeft= docCenter - (popup.width()/2);
					var oTop= curHeight;
					curHeight += popup.height() + 20;

					popup.css('top', Math.floor(oTop)+'px');
					popup.css('left', Math.floor(oLeft)+'px');
					popup.show();

				});
			}
			
			function RefeshOnCloseDisplayPopup(fb_js_var, elem) {
				
				if(fb_js_var.fbml_popup==null) {
					return;
				}
				
				if(!elem) {
					var anchor= document.getElementById('main_anchor');
					var posY = anchor.getAbsoluteTop() + 20;
					anchor.focus();
				} else {
					posY = elem.getAbsoluteTop() - elem.getClientHeight();
				}
			    document.getElementById('single_popup_content').setInnerFBML(fb_js_var.fbml_popup);
				document.getElementById('single_popup').setStyle('top', Math.floor(posY)+'px');
				//castlepb3
				var popupClass= document.getElementById('single_popup').getClassName();
				if(popupClass!='castlepb_refresh') {
					if(fb_js_var.refresh) {
						document.getElementById('single_popup').setClassName('castlepb_refresh');
					} else {
						document.getElementById('single_popup').setClassName('castlepb3');
					}
				}
				document.getElementById('single_popup_background').setStyle('display', 'block');
		        document.getElementById('single_popup').setStyle('display', 'block');
		
				var content= document.getElementById('single_popup_content');
				var centerX= 380- (content.getClientWidth()/2);
				document.getElementById('single_popup').setStyle('left', Math.floor(centerX)+'px');
				
				return false;
			}

            function PositionAndDisplayPopupData(data, anchor, posX, posY, classname) {
                $('#single_popup_content').html(data);

                $('#single_popup').css('top', posY+'px');
                $('#single_popup').css('left', posX+'px');
                $('#single_popup_background').show();
                $('#single_popup').show();
                centerCastlepbPopups();
                return false;
            }

			
			function PositionAndDisplayPopupAtTop(fb_js_var, anchor, posX, posY, classname) {
				/*
				if(anchor) {
				    var obj = $(anchor);  
					var objOffset = obj.offset();
					cur_obj = obj;
					var oTop= objOffset.top;
					var oLeft= objOffset.left;
					
				    posX = oLeft;
				    posY = oTop + 20;

				    if(posY > ($(document.body).height() - 300)) {
					    posY = $(document.body).height() - 300;
				    }
				}*/

                //console.log(hash_tag);
				
			    $('#single_popup_content').html($('#'+fb_js_var).html());
				/*
				$('#single_popup').css('top', Math.floor(posY)+'px');
				
				if(anchor) {
					$('#single_popup').css('left', Math.floor(posX)+'px');
				}
				*/
				$('#single_popup').css('top', posY+'px');
				$('#single_popup').css('left', posX+'px');
				$('#single_popup_background').show();
		        $('#single_popup').show();
				centerCastlepbPopups();
				return false;
			    
			    /*
				var anchor = $('#main_anchor');
				anchor.focus();
			    $('#single_popup_content').html($('#'+fb_js_var).html());
				$('#single_popup').css('top', Math.floor(posY)+'px');
				$('#single_popup').css('left', Math.floor(posX)+'px');
				$('#single_popup').removeAttr('class').addClass(classname);
				$('#single_popup_background').show();
		        $('#single_popup').show();
				return false;
				*/
			}

		    function hidePositionBox(evt) {
			    $('#single_popup_background').hide();
	            $('#single_popup').hide();
		    }

		    function hideEventPositionBox(evt) {
			    $('#single_popup_background_event').hide();
	            $('#single_popup_event').hide();
	            return false;
		    }

		    function hideFeedbackPositionBox(evt) {
			    $('#single_popup_background_feedback').hide();
	            $('#single_popup_feedback').hide();
	            return false;
		    }
		    

		</script>
			<script type="text/javascript" language="javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

	<!-- 
	//includes for dungeon
	//need to be in header to avoid conflict on reload 
	-->
	<script type="text/javascript" language="javascript" src="https://web4.castleagegame.com/castle_ws/js/easeljs-0.6.0.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://web4.castleagegame.com/castle_ws/js/tweenjs-0.4.0.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://web4.castleagegame.com/castle_ws/js/movieclip-0.6.0.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://web4.castleagegame.com/castle_ws/js/preloadjs-0.3.0.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://web4.castleagegame.com/castle_ws/dungeonGame.js"></script>
	<script type="text/javascript" language="javascript" src="https://web4.castleagegame.com/castle_ws/dungeonLib.js"></script>
	
	<!-- Conduit API script declaration -->
<script>
	var pageCache = {}; // Page caching
	var timedStats= {};
	var ajaxPerforming= false;
	var stopTimers=false;
	var lastMPool=0;
	var lastMOwner=0;
	var streamData = null;
	var friend_browse_offset = 0;
	var cur_raid_lst = 0;
	var ajaxPopup=false;
	var ajaxPopupTimeout=0;
	
	function treasure_chest_nav(arrow, set_id, sets_count)
	{	   
        // hide everything
        for(var i=0; i<sets_count; i++) {
            $('#leftArrow_'+i).hide();
            $('#rightArrow_'+i).hide();
            $('.chest_set_'+i).hide();
        }

        // show selected set id
        $('.chest_set_'+set_id).show();

	    if(arrow == 'left') {
            if(set_id == sets_count-1)
                $('#leftArrow_'+set_id).hide();
            else
                $('#leftArrow_'+set_id).show();

            $('#rightArrow_'+set_id).show();
	    }
	    
	    if(arrow == 'right') {
            if(set_id-1 >= 0)
                $('#rightArrow_'+set_id).show();
            else
                $('#rightArrow_'+set_id).hide();

            $('#leftArrow_'+set_id).show();
        }
	}

	function friend_bar_update(view_min, view_max, max){
		for( i=1;i <= max;i++) {
			if ( i >= view_min && i <= view_max) {
				$('#friend_box_'+i).removeAttr('class').addClass('friend_visible');
			}
			else {
				$('#friend_box_'+i).removeAttr('class').addClass('friend_hidden');
			}
		} 	
	}
	
	function friend_not_playing_bar_update(view_min, view_max, max){
		for( i=1;i <= max;i++) {
			if ( i >= view_min && i <= view_max) {
				$('#friend_not_playing_box_'+i).removeAttr('class').addClass('friend_visible');
			}
			else {
				$('#friend_not_playing_box_'+i).removeAttr('class').addClass('friend_hidden');
			}
		} 	
	}
	
	function friend_browse_left(max, bar_type) {
		var offset_max = max - 9;
		if (friend_browse_offset == offset_max) return false;
		
		if (friend_browse_offset == offset_max) return false;
		friend_browse_offset++;
		
		var view_min = max - 8 - friend_browse_offset;
		var view_max = max - friend_browse_offset;
		
		if(bar_type == 'fnp') {
		    friend_not_playing_bar_update(view_min, view_max, max);
		} else {
		    friend_bar_update(view_min, view_max, max);
		}
	}

	function friend_browse_left_jump(max, bar_type) {
		var offset_max = max - 9;
		if (friend_browse_offset == offset_max) return false;

		if (offset_max  - friend_browse_offset >= 9) {
			friend_browse_offset += 9;
		}
		else {
			friend_browse_offset = offset_max;
		}

		var view_min = max - 8 - friend_browse_offset;
		var view_max = max - friend_browse_offset;
 		
 		if(bar_type == 'fnp') {
		    friend_not_playing_bar_update(view_min, view_max, max);
		} else {
		    friend_bar_update(view_min, view_max, max);
		}
	}

	function friend_browse_left_end(max, bar_type) {
		var offset_max = max - 9;
		if (friend_browse_offset == offset_max) return false;
		
		friend_browse_offset = offset_max;
		
		var view_min = max - 8 - friend_browse_offset;
		var view_max = max - friend_browse_offset;
		
		if(bar_type == 'fnp') {
		    friend_not_playing_bar_update(view_min, view_max, max);
		} else {
		    friend_bar_update(view_min, view_max, max);
		}
	}

	function friend_browse_right(max, bar_type) {
		var offset_max = max - 9;
		if (friend_browse_offset == 0) return false;

		friend_browse_offset--;

		var view_min = max - 8 - friend_browse_offset;
		var view_max = max - friend_browse_offset;
		
		if(bar_type == 'fnp') {
		    friend_not_playing_bar_update(view_min, view_max, max);
		} else {
		    friend_bar_update(view_min, view_max, max);
		}
	}

	function friend_browse_right_jump(max, bar_type) {
		var offset_max = max - 9;
		if (friend_browse_offset == 0) return false;
		
		if (friend_browse_offset < 9) {
			friend_browse_offset = 0;
		}
		else {
			friend_browse_offset -= 9;
		}

		var view_min = max - 8 - friend_browse_offset;
		var view_max = max - friend_browse_offset;
		
		if(bar_type == 'fnp') {
		    friend_not_playing_bar_update(view_min, view_max, max);
		} else {
		    friend_bar_update(view_min, view_max, max);
		}
	}

	function friend_browse_right_end(max, bar_type) {
		var offset_max = max - 9;
		if (friend_browse_offset == 0) return false;

		friend_browse_offset = 0;

		var view_min = max - 8 - friend_browse_offset;
		var view_max = max - friend_browse_offset;
		
		if(bar_type == 'fnp') {
		    friend_not_playing_bar_update(view_min, view_max, max);
		} else {
		    friend_bar_update(view_min, view_max, max);
		}
	}

	function get_cached_ajax(url, get_type) {
		//just_body_cache
		var url_key= url;
		if(url.indexOf('?') != -1){
			url_key = url.substring(0, url.indexOf('?'));
		}
		if(get_type=='cache_body' && pageCache[url_key]) {
			if(pageCache[url_key].lastIndexOf('<fb:')==-1) {
				$('#app_body_container').html(pageCache[url_key]);
			} else {
				document.getElementById('app_body_container').innerHTML = data;
				FB.XFBML.parse(document.getElementById('app_body_container'));
			}
		} else {
			
			if(get_type=='get_page') {
			    stopTimers=true;
				pageCache[url_key]= null;
			} else if(get_type=='destroy_all_get_page') {
			    stopTimers=true;
				pageCache = {};
			}
			var params = 'ajax=1';
		    if((get_type == 'cache_body') || (get_type == 'get_body')) {
		        params += '&get_type=body';
		    }
	        
		    
			ajaxPerforming=true;
			showLoaderIfAjax();
			
			$.ajax({ url: url, context: document.body, data: params, type: 'POST', success: function(data){
			    stopTimers=false;
			    ajaxPerforming=false;
				$('#AjaxLoadIcon').hide();
				if((get_type == 'cache_body') || (get_type == 'get_body')) {
      
					if(data.lastIndexOf('<fb:')==-1) {
						$('#app_body_container').html(data);
					} else {
						document.getElementById('app_body_container').innerHTML = data;
						FB.XFBML.parse(document.getElementById('app_body_container'));
					}
					
	            } else {
		
					if(data.lastIndexOf('<fb:')==-1) {
						$('#globalContainer').html(data);
					} else {
						document.getElementById('globalContainer').innerHTML = data;
						FB.XFBML.parse(document.getElementById('globalContainer'));
					}
	            }
				centerPopups();
			}});
		}
		scrollToElement('#main_anchor');
	}
	
	function showLoaderIfAjax() {
		setTimeout(function() {
			 if (ajaxPerforming) { 
				var curTop= $(document).scrollTop() + 100;
				$('#AjaxLoadIcon').css('top', Math.floor(curTop)+'px').show(); 
			}
		 }, 1500);
	}

    // A simple timer in seconds that hides itself after use
    function simpleTimer(timer_section_id, timer_id, hidden_id, seconds, init)
    {
        if(timedStats['simpleTimer'] && init) 
        {
            clearTimeout(timedStats['simpleTimer']);
        }

        var timer = $('#'+timer_id);
        var timer_section = $('#'+timer_section_id);
        var hidden = $('#'+hidden_id);

        var secondsString = seconds.toString();
        if(seconds <= 9) {
            secondsString = '0' + secondsString;
        }

        if(init) {
            // hide id
            hidden.hide();
            // start timer
            timer_section.show();
            timer.html(secondsString);
        } else {
            // end timer
            if(seconds == 0) {
                timer_section.hide();
                hidden.show();
                return;
            }

            // keep counting down
            seconds--;
            timer.html(secondsString);
        }

        timedStats['simpleTimer'] = setTimeout(function() {simpleTimer(timer_section_id, timer_id, hidden_id, seconds, false)}, 1000);
    }
	
	function startAllTimers() {
		var monster_time_left_obj = $("#monsterTickerSecs");
		if(monster_time_left_obj) {
			monster_ticker(monster_time_left_obj.val(), true);
		}
		var guild_token_time_left_obj = $("#guild_token_time_sec");
		if(guild_token_time_left_obj) {
			stat_increase_ticker(guild_token_time_left_obj.val() , $("#guild_token_current_value_amount").val(), $("#guild_token_current_max").val(), $("#guild_token_current_recharge_time").val(), 1, 'guild_token', true);
		}

		var gold_token_time_left_obj = $("#gold_time_sec");
		if(gold_token_time_left_obj) {
			gold_increase_ticker(gold_token_time_left_obj.val() , $("#gold_current_value_amount").val(), $("#gold_current_recharge_time").val(), $("#gold_current_increment").val(), 'gold', true);
		}
		
		var stamina_time_left_obj = $("#stamina_time_sec");
		if(stamina_time_left_obj) {
			stat_increase_ticker(stamina_time_left_obj.val() , $("#stamina_current_value_amount").val(), $("#stamina_current_max").val(), $("#stamina_current_recharge_time").val(), 1, 'stamina', true);
		}
		
		var energy_time_left_obj = $("#energy_time_sec");
		if(energy_time_left_obj) {
			stat_increase_ticker(energy_time_left_obj.val() , $("#energy_current_value_amount").val(), $("#energy_current_max").val(), $("#energy_current_recharge_time").val(), 1, 'energy', true);
		}
		
		var health_time_left_obj = $("#health_time_sec");
		if(health_time_left_obj) {
			stat_increase_ticker(health_time_left_obj.val() , $("#health_current_value_amount").val(), $("#health_current_max").val(), $("#health_current_recharge_time").val(), 1, 'health', true);
		}
	}

    function headerXPSwap(startSeconds, secondsToSwap)
    {
        if(secondsToSwap == 0) {
            if($("#header_player_xp_totals").is(":visible")) {
                $("#header_player_xp_totals").fadeOut('slow',
                    function(){
                        $("#header_player_xp_needed").fadeIn('slow');
                    });
            } else {
                $("#header_player_xp_needed").fadeOut('slow',
                    function(){
                        $("#header_player_xp_totals").fadeIn('slow');
                    });
            }

            secondsToSwap = startSeconds;
        } else {
            secondsToSwap--;
        }

        setTimeout(function() {headerXPSwap(startSeconds, secondsToSwap)}, 1000);
    }
	
	$(document).ready(function() {
	  startAllTimers();
      var secondsToSwap = 12;
      headerXPSwap(secondsToSwap,secondsToSwap);
	});
	
	function monster_ticker(ticks_left,first_call) {
	    if(!first_call && stopTimers) {
	        return;
	    }
	    if(timedStats['monster'] && first_call) 
    	{
    	    clearTimeout(timedStats['monster']);
    	}
    	
    	var time_value = $("#monsterTicker");
    	if(!time_value) {
    	    return;
    	}
    	
    	if(ticks_left==0) {
    	    return;
    	}
    	ticks_left--;
        var hoursLeft = parseInt(ticks_left/3600);
        var minsLeft = parseInt((ticks_left%3600)/60);
        var secsLeft = parseInt(ticks_left%60);
        if(minsLeft <= 9) {
            minsLeft = '0' + minsLeft;
        }
        if(secsLeft <= 9) {
            secsLeft = '0' + secsLeft;
        }
        time_value.html(hoursLeft + ':' + minsLeft + ':' + secsLeft );
        timedStats['monster']= setTimeout(function() {monster_ticker(ticks_left, false)}, 1000);
	}
	
	function gold_increase_ticker(ticks_left, stat_current, tick_time, increase_value, first_call) {
	    
	    if(!first_call && stopTimers) {
	        return;
	    }
	    
	    if(timedStats['gold'] && first_call) 
    	{
    	    clearTimeout (timedStats['gold']);
    	}
    	
    	if(ticks_left < 0) {
    	    ticks_left=0;
    	}
    	
    	var time_value = $('#gold_time_value');
        var current_val = $('#gold_current_value');
        
        if(!time_value || !current_val){
            return;
        }
        
        if(ticks_left==0){
	
			stat_current = parseInt(stat_current);
			increase_value = parseInt(increase_value );
			
            stat_current += increase_value;
            if(stat_current >= 0){
                output_stat = stat_current.toString();
                var rgx = /(\d+)(\d{3})/;
                while (rgx.test(output_stat)) {
                    output_stat = output_stat.replace(rgx, '$1' + ',' + '$2');
                }
                current_val.html('$' + output_stat);
            }
            ticks_left= tick_time;
        } else {
            ticks_left -= 1;
        }
        
        var mins = parseInt(ticks_left/60);
        var secs = ticks_left%60;
        time_value.html(mins + ':' + ((secs > 9) ? secs : '0'+secs ));
        timedStats['gold']= setTimeout(function() {gold_increase_ticker(ticks_left, stat_current, tick_time, increase_value, false)}, 1000);
	}
	
    function stat_increase_ticker(ticks_left, stat_current, stat_max, tick_time, increase_value, stat_type, first_call) 
    {
        if(!first_call && stopTimers) {
	        return;
	    }
	    
	    if(timedStats[stat_type] && first_call) 
    	{
    	    clearTimeout (timedStats[stat_type]);
    	} 
    	
    	if(ticks_left < 0 ){
    	    ticks_left=0;
    	}
    	
    	var time_container = $('#' + stat_type + '_time_container');
    	var time_value = $('#' + stat_type + '_time_value');
        var current_val = $('#' + stat_type + '_current_value');
        
        if(!time_container || !time_value || !current_val){
            return;
        }
        
        if(ticks_left==0){
			stat_current = parseInt(stat_current);
			increase_value = parseInt(increase_value);
            stat_current += increase_value;
            if(stat_current > stat_max) {
                stat_current = stat_max;
            }
            current_val.html(stat_current);
            ticks_left= tick_time;
        } else {
            ticks_left -= 1;
        }
        
        if(stat_max == stat_current){
            time_container.html('');
            return;
        }
        
        var mins = parseInt(ticks_left/60);
        var secs = ticks_left%60;
        time_value.html(mins + ':' + ((secs > 9) ? secs : '0'+secs ));
        timedStats[stat_type]= setTimeout(function() {stat_increase_ticker(ticks_left, stat_current, stat_max, tick_time, increase_value, stat_type, false)}, 1000);
    }

    function excavation_ticker(ticks_left, excavationQuestId, first_call) {
        if (!first_call && stopTimers) {
            return;
        }
    
        if (timedStats['excavation_' + excavationQuestId] && first_call) {
            clearTimeout (timedStats['excavation_' + excavationQuestId]);
        } 
    
        var time_container = $('#excavation_' + excavationQuestId + '_ticker');
        var results_time_container = $('#excavation_result_' + excavationQuestId + '_ticker');
        
        if (!time_container) {
            return;
        }

        if (ticks_left < 0) {
            time_container.html('');

            if (results_time_container) {
                results_time_container.html('');
            }

            return;
        } else if (ticks_left == 0) {
            return;
        } else {
            ticks_left -= 1;
        }

        var hrs = parseInt(ticks_left/3600);
        var mins = parseInt((ticks_left%3600)/60);
        var secs = (ticks_left%3600)%60;
        time_container.html(hrs + ':' + ((mins > 9) ? mins : '0'+mins) + ':' + ((secs > 9) ? secs : '0'+secs ) + ' Time Remaining');

        if (results_time_container) {
            results_time_container.html(hrs + ':' + ((mins > 9) ? mins : '0'+mins) + ':' + ((secs > 9) ? secs : '0'+secs ) + ' Time Remaining');
        }

        timedStats['excavation_' + excavationQuestId]= setTimeout(
            function() {
                excavation_ticker(ticks_left, excavationQuestId, false)
            },
            1000
        );
    }

	function ajaxSound(setting)
    {
		friend_browse_offset = 0;
		reset_raid_lst();

		if (setting == 'on') {
			$('#audio_btn_off').show();
			$('#audio_btn_on').hide();			
		}
		else {
			$('#audio_btn_off').hide();
			$('#audio_btn_on').show();
		}
		
        var params = '';
		url = 'audio.php?setting='+setting;
        params += 'ajax=1';
                		
		$.ajax({ url: url, context: document.body, data: params, type: 'POST', success: function(data){
			$('#audio_div').html(data);
		}});
    }

		

	function scrollToElement(element_id) {
		if($(document).scrollTop() > $(element_id).offset().top) {
		$(document).scrollTop(Math.floor($(element_id).offset().top));		
}		
	}

    function scrollToBottom(element_id)
    {
        var scrollHeight = $(element_id).prop('scrollHeight');
        $(element_id).scrollTop(scrollHeight);
    }

	function positionFocus() {
		scrollToElement('#main_anchor');
	}

	function ajaxLinkSend(div, url)
    {
		scrollToElement('#main_anchor');
		friend_browse_offset = 0;
		reset_raid_lst();

		pageCache = {};
		ajaxPerforming=true;
		
		showLoaderIfAjax();

        var params = 'ajax=1';
                
        if (!url) {
			url = 'index.php?adkx=2';
	    }
		
		$.ajax({ url: url, context: document.body, data: params, type: 'POST', success: function(data){
		    ajaxPerforming=false;
			$('#AjaxLoadIcon').hide();
			
			if(data.lastIndexOf('<fb:')==-1) {
				$('#'+div).html(data);
			} else {
				if (data == null || data == '') {
					//temp fix
				} else {
					document.getElementById(div).innerHTML = data;
					FB.XFBML.parse(document.getElementById(div));
				}
			}
			centerPopups();
			startAllTimers();
		}});
		
    }

	function ajaxSkip(div, url)
    {
		friend_browse_offset = 0;
		ajaxPerforming=true;

		showLoaderIfAjax();
		
		var params = '';
        params += '&ajax=1&skip=1';
        		
       if (!url) {
			url = 'index.php?adkx=3';
	    }
	
		$.ajax({ url: url, context: document.body, data: params, type: 'POST', success: function(data){
		    ajaxPerforming=false;
			$('#AjaxLoadIcon').hide();
			
			if(data.lastIndexOf('<fb:')==-1) {
				$('#'+div).html(data);
			} else {
				document.getElementById(div).innerHTML = data;
				FB.XFBML.parse(document.getElementById(div));
			}
			centerPopups();
		}});
		
		scrollToElement('#main_anchor');
		
    }

    function quick_ajax(url)
    {
        var params = '';
        params += 'ajax=1';
                
        if (!url) {
			url = 'index.php?adkx=4';
	    }

		$.ajax({ url: url, context: document.body, data: params, type: 'POST'});
    }

    function quick_ajax_refresh(div, url_refresh, params, seconds)
    {
	        params += 'ajax=1';
	           	 	   var p_timeout = setTimeout(
    	       function() {

			$.ajax({ url: url_refresh, context: document.body, data: params, type: 'POST', success: function(data){
				
				if(data.lastIndexOf('<fb:')==-1) {
					$('#'+div).html(data);
				} else {
					document.getElementById(div).innerHTML = data;
					FB.XFBML.parse(document.getElementById(div));
				}
				centerPopups();
			}});
			
			
       },
       seconds ); //update every 6 seconds
    }
    
    function quick_ajax_load_refresh(div, url_do, url_refresh, params1, params2)
    {
        params1['ajax'] = 1;
        params2['ajax'] = 1;
        
        var ajax_send = new Ajax();
        ajax_send.responseType = Ajax.FBML;
        ajax_send.ondone = function(data) {};
        ajax_send.requireLogin = 1;
        ajax_send.post('https://web4.castleagegame.com/castle_ws/' + url_do, params1);
        ajax_send.onerror = function() { console.log("error sending...");};
       var p_timeout = setTimeout(
    	       function() {
    	   var ajax_ret = new Ajax();
           ajax_ret.responseType = Ajax.FBML;
           ajax_ret.ondone = function(data) { document.getElementById(div).setInnerFBML(data); };
           ajax_ret.requireLogin = 1;
           ajax_ret.post('https://web4.castleagegame.com/castle_ws/' + url_refresh, params2);
           ajax_ret.onerror = function() { console.log("error getting ret");};
       },
        2000 ); //update every 2 seconds
    }

    //for deity feature
    function symbolDisplay(id, pg , total ) {
		for (i = 1; i <= total; i++) {
			if (i != id) {
			$('#symbol_display' + pg + i).css('display','none');
			$('#symbol_image_div_' + pg + i).css( 'width' , '100px' );
			$('#symbol_image_div_' + pg + i).css( 'height' , '100px' );
			$('#symbol_image_' + pg + i).css( 'width' , '100px' );
			$('#symbol_image_' + pg + i).css( 'height' , '100px' );
			$('#symbol_tab_' + pg + i).css( 'padding' , '0 0 0 5px' );
			$('#symbol_arrow_div_' + pg + i).css( 'display' , 'block');
			}
			else {
			$('#symbol_display' + pg + i).css('display','block');
			$('#symbol_image_div_' + pg + i).css( 'width' , '160px' );
			$('#symbol_image_div_' + pg + i).css( 'height' , '160px' );
			$('#symbol_image_' + pg + i).css( 'width' , '160px' );
			$('#symbol_image_' + pg + i).css( 'height' , '160px' );
			if (i == 1)
				$('#symbol_tab_' + pg + i).css( 'padding' , '0px 0 25px 5px' );
			else
				$('#symbol_tab_' + pg + i).css( 'padding' , '25px 0 25px 5px' );
			$('#symbol_arrow_div_' + pg + i).css( 'display' , 'none');

			}
		}
	}

    function symbolDisplayQuest(id, pg , total ) {
    	for (i = 1; i <= total; i++) {

    		if (i != id) 
    		{
    			$('#symbol_display' + pg + i).css('display','none');
    			$('#symbol_image_div_' + pg + i).css( 'width' , '100px' );
    			$('#symbol_image_div_' + pg + i).css( 'height' , '100px' );
    			$('#symbol_image_' + pg + i).css( 'width' , '100px' );
    			$('#symbol_image_' + pg + i).css( 'height' , '100px' );
    			$('#symbol_tab_' + pg + i).css( 'padding' , '60px 0 0 5px' );
    			$('#symbol_tab_' + pg + i).css( 'width' , '104px' );
    			$('#symbol_tab_' + pg + i).css( 'height' , '104px' );
    			$('#symbol_desc_' + pg + i).css('display','none');
    		}
    		else 
    		{
    			$('#symbol_display' + pg + i).css('display','block');
    			$('#symbol_image_div_' + pg + i).css( 'width' , '160px' );
    			$('#symbol_image_div_' + pg + i).css( 'height' , '160px' );
    			$('#symbol_image_' + pg + i).css( 'width' , '160px' );
    			$('#symbol_image_' + pg + i).css( 'height' , '160px' );
    			$('#symbol_tab_' + pg + i).css( 'padding' , '0px 0 0 5px' );
    			$('#symbol_tab_' + pg + i).css( 'width' , '164px' );
    			$('#symbol_tab_' + pg + i).css( 'height' , '164px' );
    			$('#symbol_desc_' + pg + i).css('display','block');
    		}
    		
    		$('#main_bn').removeAttr('class').addClass('symbolquests_stage_' + id);
    	}
    }
    
	function ajaxSectionUpdate(div, url)
	{
    
		pageCache = {};

		ajaxPerforming=true;
		showLoaderIfAjax();

		if (!url) {
			url = 'index.php?adkx=5';
	    }
        params += 'ajax=1';
        		
		$.ajax({ url: url, context: document.body, data: params, type: 'POST', success: function(data){
		    ajaxPerforming=false;
			$('#AjaxLoadIcon').hide();
			
			if(data.lastIndexOf('<fb:')==-1) {
				$('#'+div).html(data);
			} else {
				document.getElementById(div).innerHTML = data;
				FB.XFBML.parse(document.getElementById(div));
			}
			centerPopups();
		}});
	}

    function newsFeed(params, formElement) {        
        if(!params) {
            params= '';
        }
		
		var postData={};
		if(formElement) {
			postData= $(formElement).serialize();
	        postData += '&ajax=1';
	        			
		}

		$.ajax({ url: 'newsFeed.php?'+params, context: document.body, data: postData, type: 'POST', dataType: 'json', success: function(data){
				        
			// if($.browser.safari){
			// 	$(document).scrollTop(0);
			// }

			if (data.web3) {
				$('#results_container').html("You have published a message to your friends").show();
				return;
			} else {
				
				if(data.fbml_msg){
					if(data.fbml_msg.lastIndexOf('<fb:')==-1) {
						$('#results_container').html(data.fbml_msg).show();
					} else {
						document.getElementById('results_container').innerHTML = data.fbml_msg;
						FB.XFBML.parse(document.getElementById('results_container'));
						$('#results_container').show();
					}
		        }
		
		        var autopublish = false;
		
				streamData = data;
				var target_id=null
				if(data.store_type=='guild_focus' || data.store_type=='focus_feed_cta') {
					target_id= data.target_id;
				}
				FB.ui(
				  { user_message: data.streamText,
				    method: 'stream.publish',
				    attachment: data.attachment,
				    action_links: data.actionLinks,
					target_id: target_id,
					user_message_prompt: data.messagePrompt,
					auto_publish: autopublish
				  }	,
					   function(response) {
					     if (response && response.post_id) {
					       	var params = {'ajax': 1,'post_id': response.post_id, 'data': streamData};
					        					       	
							$.ajax({ url: 'feed_callback.php', context: document.body, data: params, type: 'POST'});
					     }
					   }
			
				);
			}	
		}});

    }

	function find_monster_popup() {
		var code_input= document.getElementById('public_monster_code');
		var code= code_input.value;
		
		if(code.length==0) {
			return;
		}
		ajax_popup('find_monster_by_code_popup.php?code=' + code, code_input);
	}    

	function ajax_popup(url, elem, anchor_id) {
		var anchor= null;
		if(anchor_id) {
			var anchor= document.getElementById(anchor_id);
		} else {
			var anchor= document.getElementById('main_anchor');
		}
		var posY = 300;
		if(elem) {
			posY = 300;
		}
		cur_page_elem= document.getElementById('current_pg_info');
		if(cur_page_elem) {
			if(url.indexOf('?') != -1){
				url = url + '&refer='+cur_page_elem.value;
			} else {
				url = url + '?refer='+cur_page_elem.value;
			}
		}

        postData = 'ajax=1';
        			
		
		var posX= 160;

		$.ajax({ url: url, context: document.body, data: postData, type: 'POST', success: function(data){
				PositionAndDisplayPopupData(data, 'castlepb3', posX, posY, anchor_id);
			}
		});

	}
	
	function gift_popup(url, posX, PosY) {
		 postData = 'ajax=1';
        			

		$.ajax({ url: url, context: document.body, data: postData, type: 'POST', success: function(data){
				PositionAndDisplayPopupData(data, 'castlepb3', posX, PosY);
				scrollToElement('#main_anchor');
			}
		});
			
	}
	
	/*
	function ajax_post_popup(formElement) {
		if(ajaxPopupTimeout>0){
			return;
		}
		if(formElement) {
			var postData = formElement.serialize();
		} else {
			var postData= '';
		}			
		
		var ajax = new Ajax();
        ajax.responseType = Ajax.JSON;
        ajax.ondone = function(data) {
			ajaxPerforming=false;
            document.getElementById('AjaxLoadIcon').setStyle('display', 'none');
			RefeshOnCloseDisplayPopup(data);
			ajaxPopupTimeout=0;
        };

		ajaxPerforming=true;
		ajaxPopupTimeout=5;
		setTimeout(function() { if (ajaxPerforming) document.getElementById('AjaxLoadIcon').setStyle('display', 'block'); }, 1000);
		
		setTimeout(function() { ajaxPopupTimeoutTask()}, 1000);
			
		
        ajax.requireLogin = 1;
		ajax.post('https://web4.castleagegame.com/castle_ws/post_handler.php?', params);
	}
	*/
	
    function newsFeedFestival(params, formElement) {
        if(!params) {
            params= '';
        }

		var postData={};
		if(formElement) {
			postData= $(formElement).serialize();
	        postData += '&ajax=1';
	        			
		}
	    
		$.ajax({ url: 'newsFeedFestival.php?'+params, context: document.body, data: postData, type: 'POST', dataType: 'json', success: function(data){
                          if(data.fbml_msg){
				if(data.fbml_msg.lastIndexOf('<fb:')==-1) {
					$('#results_container').html(data.fbml_msg).show();
				} else {
					document.getElementById('results_container').innerHTML = data.fbml_msg;
					FB.XFBML.parse(document.getElementById('results_container'));
					$('#results_container').show();
				}
	        }
	        
			// if($.browser.safari){
			// 	$(document).scrollTop(0);
   //                        }
	
			if (data.autopublish == 'on') {
                              var autopublish = true;
	        } else {
                              var autopublish = false;
			}
			streamData = data;
			var target_id=null;
			if(data.store_type=='guild_focus' || data.store_type=='focus_feed_cta') {
				target_id= data.target_id;
			}
			FB.ui(
			  { user_message: data.streamText,
			    method: 'stream.publish',
			    attachment: data.attachment,
			    action_links: data.actionLinks,
				target_id: target_id,
				user_message_prompt: data.messagePrompt,
				auto_publish: autopublish
			  }	,
				   function(response) {
				     if (response && response.post_id) {
				       	var params = {'ajax': 1,'post_id': response.post_id, 'data': streamData};
											$.ajax({ url: 'feed_callback.php', context: document.body, data: params, type: 'POST'});
				     }
						  }
                          
			);

		}});

    }

    function caPost(url, data)
    {
                return $.post(url, data);
    }

	function ajaxFormSend(div, url, formElement, anchor)
    {
            // send to top of
//main_bn
		   if(!anchor || $('#'+anchor).length==0) {
               anchor= 'main_anchor';
           }
           scrollToElement('#'+anchor);

		   friend_browse_offset = 0;
		   reset_raid_lst();
		   
		   if(!anchor) {
               anchor= 'main_anchor';
           }
           
           stopTimers=true;

			params = $(formElement).serialize();
	        params += '&ajax=1';
	            		pageCache = {};
			if (!url) {
				url = 'index.php?adkx=7';
		    }
			ajaxPerforming=true;
			showLoaderIfAjax();
			
			$.ajax({ url: url, context: document.body, data: params, type: 'POST', success: function(data){
			    stopTimers=false;
			    ajaxPerforming=false;
				$('#AjaxLoadIcon').hide();
				if(data.lastIndexOf('<fb:')==-1) {
					$('#'+div).html(data);
				} else {
					if (data == null || data == '') {
						//temp fix
					} else {					
						document.getElementById(div).innerHTML = data;
						FB.XFBML.parse(document.getElementById(div));
					}
				}
				centerPopups();
				startAllTimers();
			}});

			 //FB.init({
			 //    appId  : '46755028429',
			 //    status : true, // check login status
			 //    cookie : true, // enable cookies to allow the server to access the session
			 //    xfbml  : true  // parse XFBML
			 //  });
			 //FB.Canvas.setAutoResize();				
    }

    function switchStageSet(set_num) {
	    var count=0;
	    var stage_set = $('#stage_set_' + count);
	    while(stage_set.length>0) {
	        if(count==set_num){
	            stage_set.show();
	        } else {
	            stage_set.hide();
	        }
	        count++;
	        stage_set = $('#stage_set_' + count);
	    }
	}

	function ajaxToFeedFormSend(div, url, formElement, anchor)
    {
		if(!anchor) {
	    	anchor= 'main_anchor';
	    }
          
	    stopTimers=true;
		ajaxPerforming=true;
	   	pageCache = {};
		
		showLoaderIfAjax();
		
		if (!url) {
			url = 'index.php?adkx=8';
	    }
	
		var params = $(formElement).serialize();
        params += '&ajax=1';
        	
		$.ajax({ url: url, context: document.body, data: params, type: 'POST', success: function(data){
		    ajaxPerforming=false;
		    stopTimers=false;
			$('#AjaxLoadIcon').hide();
			
			if(data.lastIndexOf('<fb:')==-1) {
				$('#'+div).html(data);
			} else {
				document.getElementById(div).innerHTML = data;
				FB.XFBML.parse(document.getElementById(div));
			}
			centerPopups();
		}});
		
		scrollToElement('#'+anchor);
		quickFeed(url, formElement);
		
	}
	
	function quickFeed(url, formElement) {
		var params = $(formElement).serialize();
        params += '&ajax=1';
        		
		$.ajax({ url: 'newsFeed.php', context: document.body, data: params, type: 'POST', success: function(data){
			FB.ui(
			  { user_message: data.streamText,
			    method: 'stream.publish',
			    attachment: data.attachment,
			    action_links: data.actionLinks,
				target_id: data.target_id,
				user_message_prompt: data.messagePrompt,
				callback: null,
				auto_publish: false
			  }
			);
			
		}});
		
	}

	function friendTwitter(id,type, url, formElement) {
		$('#ob_friend_id').val(id);
		$('#ob_friend_type').val(type);
		hideEventPositionBox();
		newsFeed(url, formElement);
	}
	
	function friendTwitter2(id, url, formElement) {
		$('#ob_friend_id').val(id);
		newsFeed(url, formElement);
	}
	
	function friendTwitter3(id, type, url, formElement) {
		$('#ob_friend_id').val(id);
		$('#ob_friend_type').val(type);
		newsFeed(url, formElement);
	}

	function friendKeepBrowse(friend_id, url, formElement) {
		$('#friend_keep_id').val(friend_id);
		ajaxFormSend('globalContainer', url, formElement);
	}

	//achievements javascript
	function achievementsView(page) {
		$('#achievement_main_container').removeAttr('class').addClass('show_achievement_' + page);
	}

	function showItemPopupRelative(button_id, parent, x_offset, y_offset) {
		var elem = $('#'+button_id);
		move_box(parent, elem, x_offset, y_offset, 1);
		elem.css('visibility','visible');
	}	
	function showItemPopup(button_id, parent, x_offset, y_offset) {
		var elem = $('#'+button_id);
		move_box(parent, elem, x_offset, y_offset);
		elem.css('visibility','visible');
	}	
	function hideItemPopup(button_id) {
		var elem = $('#'+button_id);
		elem.css('visibility','hidden');
	}
	
	// for dropdown menu
	function showList(list_id) {
		var elem = $('#'+list_id);
		elem.css('display','block');
	}
	
	function hideList(list_id) {
		var elem = $('#'+list_id);
		elem.css('display','none');
	}

	function move_box(an, box, x_offset, y_offset, relative)  
	{  
		if (relative == null) {
			relative = 0;
		}
		
		if (x_offset == null) {
			x_offset = 0;
		}
		if (y_offset == null) {
			y_offset = 0;
		}
		
	    var obj = $(an)
	    if (relative == 0) {
			var objOffset = obj.offset();
	    }
	    else {
			var objOffset = obj.position();
	    }
		
		var oTop= objOffset.top;
		var oLeft= objOffset.left;
		//console.log('position1: '+oTop+ ','+oLeft);
		
		oLeft = oLeft + x_offset;
		oTop = oTop + y_offset;
		//console.log('position2: '+oTop+ ','+oLeft +'-'+y_offset+','+x_offset );


	    box.css('left', Math.floor(oLeft) + 'px');  
	    box.css('top', Math.floor(oTop + 20) + 'px');
	}

	function showRewardPopup(button_id, parent) {
		var elem = $('#'+button_id);
		var parentElem= $(parent);
		move_box(parentElem, elem);
		elem.css('visibility','visible');
		for (var i = 0; i < 7; i++)
		{
			var eid = 'rank_reward_button_' + i;
			if (eid != button_id)
			{
				$('#'+eid).css('visibility','hidden');
			}
		}
	}	
	
	function hideRewardPopup() {
		for (var i = 0; i < 7; i++)
		{
			var eid = 'rank_reward_button_' + i;
			$('#'+eid).css('visibility','hidden');
		}
	}

	function trophyTabBrowse(classname) {
		$('#trophy_logs').removeAttr('class').addClass(classname);
	}

	function monsterTabBrowse(classname) {
		$('#action_logs').removeAttr('class').addClass(classname);
	}

	function alchemyTabBrowse(classname) {
		$('#recipe_list').removeAttr('class').addClass(classname);
	}	

	//intro javascript
	introPage = 1;

	function introPageTurn(page) {
		if (page > 3) page = 3;
		for (i=1;i<=3;i++) {
			if(page == i) {
				introPage = i;
				$('#introPage' + i).show();
			}
			else {
				$('#introPage' + i).hide();
			}
		}
		if (page == 3)
		{
			$('#buttonset_1').hide();
			$('#buttonset_2').show();
		}
	}
	
	function swapElementClass(elem_id, classname) {
		$('#'+elem_id).removeAttr('class').addClass(classname);
	}

	function introShowAllFriends() {
		$('#intro_friend_list').show();
		$('#show_friends_div').hide();
	}

    function introShowAllFriends() {
		$('#intro_friend_list').show();
		$('#show_friends_div').hide();
	}
	
	function introHeroChoose(hero_id) {
		var heroArray = [];
					heroArray[0]=12;
					heroArray[1]=14;
					heroArray[2]=13;
					heroArray[3]=15;
		
		for(i=0;i < heroArray.length;i++) {
			
			if (hero_id == heroArray[i]) {
				$('#introRadio' + heroArray[i]).attr('checked', 'checked')
				$('#introHero' + heroArray[i]).removeAttr('class').addClass('introHero');
				$('#introHeroImg' + heroArray[i]).removeAttr('class').addClass('introHeroImg');
				$('#introButtonBack' + heroArray[i]).removeAttr('class').addClass('imgButtonBack');
				$('#introButton' + heroArray[i]).removeAttr('class').addClass('imgButton');				
			}
			else {
				$('#introRadio' + heroArray[i]).attr('checked', '')
				$('#introHero' + heroArray[i]).removeAttr('class').addClass('introHeroRev');
				$('#introHeroImg' + heroArray[i]).removeAttr('class').addClass('introHeroImg');
				$('#introButtonBack' + heroArray[i]).removeAttr('class').addClass('imgButtonRevBack');
				$('#introButton' + heroArray[i]).removeAttr('class').addClass('imgButtonReverse');
			}
		}
	}

	function hide_element(element) {
		$('#text_submit_button').hide();
	}

	//quest expand
	function expandQuestStory() {
		$('#expandQuestStory2').show();
		$('#expandQuestStory').hide();
	}

	//expand battle results
	function setElementToClass(elementId,className) {
		$('#' + elementId).removeAttr('class').addClass(className);
	}

	function setRaidLst(diff, max_raid_lst)
	{
		var next_lst = cur_raid_lst + diff;
		if (next_lst < 0) next_lst = 0;
		else if (next_lst > max_raid_lst) next_lst = max_raid_lst;
		$('#raid_atk_lst'+cur_raid_lst).hide();
		cur_raid_lst = next_lst;
		$('#raid_atk_lst'+next_lst).show();
	}
	function reset_raid_lst()
	{
		cur_raid_lst = 0;
	}
	function toggleRaidAttackClass(switch_class)
	{
		$('#raid_invade_buttons').removeAttr('class').addClass(switch_class);
	}	
	
	function newScrollMonsterAttack(direction, openAttacks) {
		var currentOffsetElement = $('#currentOffset');
		var currentOffset = parseInt(currentOffsetElement.val());
		var availableAttackElement = $('#availableAttacks');
		var avaiableAttack = parseInt(availableAttackElement.val());
		var newOffset= currentOffset;
		if(direction=='left') {
			if(currentOffset > (openAttacks-1)) {
				newOffset = currentOffset -openAttacks;
				
				for (i=1;i<=avaiableAttack;i++)
				{
					var newId = 'monster_attack_section_' + i;
					var attackSectionElement = $('#' + newId);
					
					if((i >= newOffset) && (i <= newOffset +(openAttacks-1) )) {
						attackSectionElement.show();
					} else {
						attackSectionElement.hide();
					}
				}
			}
		} else {
			if(currentOffset < (avaiableAttack - (openAttacks-1))) {
				newOffset = currentOffset +openAttacks;
				for (i=1;i<=avaiableAttack;i++)
				{
					var newId = 'monster_attack_section_' + i;
					var attackSectionElement = $('#' + newId);
					
					if((i >= newOffset) && (i <= newOffset +(openAttacks-1) )) {
						attackSectionElement.show();
					} else {
						attackSectionElement.hide();
					}
				}
			}
		}
		
		if(newOffset > 1) {
			var leftArrowElement = $('#scrollLeftArrow');
			leftArrowElement.show();
		} else {
			var leftArrowElement = $('#scrollLeftArrow');
			leftArrowElement.hide();
		}
		
		if(newOffset < (avaiableAttack - (openAttacks-1) )) {
			var leftArrowElement = $('#scrollRightArrow');
			leftArrowElement.show();
		} else {
			var leftArrowElement = $('#scrollRightArrow');
			leftArrowElement.hide();
		}
		currentOffsetElement.val(newOffset);
	}

	function guildAttackTypeScroll(position,target_id,direction) {
		if (direction == 'basic') {
			$('#basic' + '_' + position + '_' + target_id).show();
			$('#special' + '_' + position + '_' + target_id).hide();
		}
		else {
			$('#basic' + '_' + position + '_' + target_id).hide();
			$('#special' + '_' + position + '_' + target_id).show();
		}
	}

	function guildSpecialDefenseScroll(position,target_id, key) {
		$('#special_defense_button_selector_' + position + '_' + target_id).children('div').each(function(index) {
			if($(this).attr('id').match(/special_defense_button/)) {
				$(this).hide();
			}
		});
		$('#special_defense_button_' + position + '_' + target_id + '_' + key).show();
	}
	
	function guildSpecialScroll(position,target_id, key) {
		$('#special_button_selector_' + position + '_' + target_id).children('div').each(function(index) {
			if($(this).attr('id').match(/special_button/)) {
				$(this).hide();
			}
		});
		$('#special_button_' + position + '_' + target_id + '_' + key).show();
	}
	
	function guildAttackScroll(target_id,direction) {
		var currentOffsetElement = $('#attack_key_'+target_id);
		var currentOffset = parseInt(currentOffsetElement.val());
		
		var allowedAttackElement = $('#allowedAttacks');
		var allowedAttack = parseInt(allowedAttackElement.val());
		
		var newOffset= currentOffset;
		if(direction=='left') {
			if(currentOffset>1) {
				newOffset= currentOffset- 1;
			}
		} else {
			if(currentOffset<allowedAttack) {
				newOffset= currentOffset+ 1; 
			}
		}
		
		var attackElement= $('#attack_'+newOffset);
		if(attackElement) {
			stam_cost= attackElement.val();
			stam_img= 'button_cost_stamina_'+stam_cost+'.gif';
			stam_cost_img_element= $('#stamina_cost_'+target_id);
			cur_img_url= stam_cost_img_element.attr('src');
			stam_cost_img_element.attr('src', cur_img_url.substr(0, cur_img_url.lastIndexOf('/')+1) + stam_img);
		} else {
			newOffset= currentOffset;
		}
		
		if(newOffset > 1) {
			var leftArrowElement = $('#scrollLeftArrow_'+target_id);
			leftArrowElement.show();
		} else {
			var leftArrowElement = $('#scrollLeftArrow_'+target_id);
			leftArrowElement.hide();
		}
		
		if(newOffset < allowedAttack) {
			var leftArrowElement = $('#scrollRightArrow_'+target_id);
			leftArrowElement.show();
		} else {
			var leftArrowElement = $('#scrollRightArrow_'+target_id);
			leftArrowElement.hide();
		}
		currentOffsetElement.val(newOffset);
	}
	
	function scrollMonsterAttack(direction) {
		var currentOffsetElement = $('#currentOffset');
		var currentOffset = parseInt(currentOffsetElement.val());
		var availableAttackElement = $('#availableAttacks');
		var avaiableAttack = parseInt(availableAttackElement.val());
		var newOffset= currentOffset;
		if(direction=='left') {
			if(currentOffset > 1) {
				newOffset = currentOffset -1;
				
				for (i=1;i<=avaiableAttack;i++)
				{
					var newId = 'monster_attack_section_' + i;
					var attackSectionElement = $('#'+newId);
					
					if((i >= newOffset) && (i <= newOffset +2 )) {
						attackSectionElement.show();
					} else {
						attackSectionElement.hide();
					}
				}
			}
		} else {
			if(currentOffset < (avaiableAttack - 2)) {
				newOffset = currentOffset +1;
				for (i=1;i<=avaiableAttack;i++)
				{
					var newId = 'monster_attack_section_' + i;
					var attackSectionElement = $('#'+newId);
					
					if((i >= newOffset) && (i <= newOffset +2 )) {
						attackSectionElement.show();
					} else {
						attackSectionElement.hide();
					}
				}
			}
		}
		
		if(newOffset > 1) {
			var leftArrowElement = $('#scrollLeftArrow');
			leftArrowElement.show();
		} else {
			var leftArrowElement = $('#scrollLeftArrow');
			leftArrowElement.hide();
		}
		
		if(newOffset < (avaiableAttack - 2)) {
			var leftArrowElement = $('#scrollRightArrow');
			leftArrowElement.show();
		} else {
			var leftArrowElement = $('#scrollRightArrow');
			leftArrowElement.hide();
		}
		currentOffsetElement.val(newOffset);
	}


	function quest_choose(quest_id) {
		var selected_img = 'https://castleagegame1-a.akamaihd.net/graphics/map_button_flash_red.gif';
		var unselected_img = 'https://castleagegame1-a.akamaihd.net/graphics/map_button_quest.gif';


		$('#quest_display_container').children().hide();
		$('#quest_wrapper_' + quest_id).show();
		
		$('.meta_quest_button').attr('src', unselected_img)
		
		$('#meta_quest_button_' + quest_id).attr('src', selected_img);
		
		$('#results_main_wrapper').hide();

		scrollToElement('#quest_wrapper_' + quest_id);
	}

	function promotion_choose(promotion_id) {
		var selected_img = 'https://castleagegame1-a.akamaihd.net/graphics/map_button_flash_red.gif';
		var unselected_img = 'https://castleagegame1-a.akamaihd.net/graphics/map_button_quest.gif';
		var questStuff = document.getElementById('quest_display_container');
		var questMetaContainer = document.getElementById('quest_map_container');

		var elements = questStuff.childNodes;
		for(var i=0; i< elements.length; i++)
		{		
			var questTempElement = elements[i];
			if (questTempElement.tagName == undefined) continue;
			if (questTempElement.tagName.toLowerCase() == 'div') {
				questTempElement.style.display='none';
			}
		}

		var elements = questMetaContainer.childNodes;
		for(var i=0; i< elements.length; i++)
		{						
			var questTempElement = elements[i];
			if (questTempElement.tagName == undefined) continue;
			if (questTempElement.tagName.toLowerCase() == 'div') {
				var questTempElementId = questTempElement.id;
				if (questTempElementId != undefined && questTempElementId != '') {
					if (questTempElementId.match(/meta_quest_/)) {
						var questTempId = questTempElementId.substring('meta_quest_'.length);
						var questTempButton = document.getElementById('meta_quest_button_'+questTempId);
						if (questTempButton) {
							questTempButton.src = (unselected_img);
						}
					} else if(questTempElementId.match(/meta_promotion_/)) {
						var promotionTempId = questTempElementId.substring('meta_promotion_'.length);
						document.getElementById('meta_promotion_off_' + promotionTempId).style.display = 'block';
						document.getElementById('meta_promotion_on_' + promotionTempId).style.display = 'none';
					}
				}
			}
		}

		document.getElementById('results_main_wrapper').style.display = 'none';

		//promotion_wrapper_
		var selectedPromo= document.getElementById('promotion_wrapper_' + promotion_id);
		selectedPromo.style.display = 'block';

		document.getElementById('meta_promotion_off_' + promotion_id).style.display = 'none';
		document.getElementById('meta_promotion_on_' + promotion_id).style.display = 'block';
		//document.getElementById('quest_main_anchor').focus();

	}
	
	function collapse_expand(lvlRange, value) {
		
		if (value=='collapse') {
			$('#collapse_link_' + lvlRange).hide();
			$('#expand_link_' + lvlRange).show();
			$('#section_' + lvlRange).hide();
		}

		if (value=='expand') {
			$('#collapse_link_' + lvlRange).show();
			$('#expand_link_' + lvlRange).hide();
			$('#section_' + lvlRange).show();
		}
	}

	function styleDisplay(id, style) {
		if (style=='none') {
			$('#'+id).hide();
		}
		else if (style=='block') {
			$('#'+id).show();
		}
	}
	
	function showItem(button_id, parent) {
		var elem= $('#'+button_id);
		var parentElem= $(parent);
		move_box(parentElem, elem);
		elem.css('visibility','visible');
	}
	
	function hideItem(item_id) {
		var elem= $('#'+item_id);
		elem.css('visibility','hidden');
	}
	
	function centerPopups() {
		var curHeight=$('#main_anchor').offset().top + 20;
		var docCenter= $(document).width()/2;
		$('.result_popup_message').each(function() {
			var popup= $(this);
			var oLeft= 60;
			var leftSpacingValElem = popup.find('.popupleftspacing');
			if(leftSpacingValElem.length > 0) {
				oLeft= leftSpacingValElem.val();
			}
			var oTop= curHeight;
			var topSpacingValElem = popup.find('.popuptopspacing');
			if(topSpacingValElem.length > 0) {
				oTop= topSpacingValElem.val();
			}
			curHeight += popup.height() + 20;
			
			popup.css('top', Math.floor(oTop)+'px');
			popup.css('left', Math.floor(oLeft)+'px');
			popup.show();
			
		});
	}

	function swapBattleTimeSelect(selector) {
		var remainder = selector.value % 2;
		
		if(remainder==0) {
			document.getElementById('oddTimeBattle').style.display='none';
			document.getElementById('evenTimeBattle').style.display='block';
		} else {
			document.getElementById('oddTimeBattle').style.display='block';
			document.getElementById('evenTimeBattle').style.display='none';
		}
	}
	
	function inventory_bag(open)
    {
        if(open == true) {
            document.getElementById('inventory_bg').style.display='block';
            document.getElementById('inventory_popup').style.display='block';
        } else {
            document.getElementById('inventory_bg').style.display='none';
            document.getElementById('inventory_popup').style.display='none';
        }
    }

		var credit_item_id = 6;	

	function creditSelector(item_id) {
		credit_item_id = item_id;
	}

	function radioCheck(item_id) {
		credit_item_id = item_id;
		if(document.getElementById('fbcreditID_'+item_id)) {
		document.getElementById('fbcreditID_'+item_id).checked='checked';
		}
		if(document.getElementById('fbcreditID_'+item_id)) {
		document.getElementById('creditID_'+item_id).checked='checked';
	}
	}

	function creditBoxShow(box_id) {
		for (i=1;i<=2;i++) {
			document.getElementById('credit_box_'+i).style.display='none';
			document.getElementById('buybtn_'+i).style.display='none';
		}
		document.getElementById('credit_box_'+box_id).style.display='block';
		document.getElementById('buybtn_'+box_id).style.display='block';
	}
	
	function creditBuy() {

	    var order_info = { 
				"item_id":credit_item_id
             };
        		
		/*
	    var order_info = { 
				"item_id":6,
    			"title":'300 Favor Points!',
               "description":'get em fps',
               "price":50,
               "image_url":'https://castleagegame1-a.akamaihd.net/graphics/credits_favor_icon.gif',
               "product_url":'https://castleagegame1-a.akamaihd.net/graphics/credits_favor_icon.gif'
             };
		*/
	    var obj = {

	    		method: 'pay.prompt',
	    		credits_purchase: false,
	    		order_info: order_info,
	    		dev_purchase_params: {"oscif":"true"},
	    		purchase_type: 'item'

		    //method: 'pay',
			//credits_purchase: true,
		    //order_info: order_info,
		    //purchase_type: 'item'
	    };

	    FB.ui(obj, callback);        
	}

	function newPaymentBuy() {

		//var product_url = 'https://web4.castleagegame.com/castle_ws/favorpointpack.php';
		var product_url = 'https://web4.castleagegame.com/castle_ws/favorpointpack2.php?r='+credit_item_id;
	    var obj = {
	    		method: 'pay',
	    		action: 'purchaseitem',
	    		product: product_url
	    		//quantity: 10,
	    		//request_id: 'YOUR_REQUEST_ID'
	    };

	    FB.ui(obj, callback2);        
	}

	var callback2 = function(data) {
		if (data['order_id']) {
			var oracleDiv = document.getElementById('oracleDiv');
			oracleDiv.style.display='block';
			writeback("Transaction Completed! </br></br>"
				+ "Data returned from Facebook: </br>"
				+ "<b>Order ID: </b>" + data['order_id'] + "</br>"
				+ "<b>Status: </b>" + data['status']);
	    } else if (data['error_code']) {
			writeback("Transaction Failed! </br></br>"
			+ "Error message returned from Facebook:</br>"
			+ data['error_message']);
	    } else {
			writeback("Transaction failed!");
	    }
	};	

	var callback = function(data) {
		if (data['order_id']) {
			var oracleDiv = document.getElementById('oracleDiv');
			oracleDiv.style.display='block';
			writeback("Transaction Completed! </br></br>"
				+ "Data returned from Facebook: </br>"
				+ "<b>Order ID: </b>" + data['order_id'] + "</br>"
				+ "<b>Status: </b>" + data['status']);
	    } else if (data['error_code']) {
			writeback("Transaction Failed! </br></br>"
			+ "Error message returned from Facebook:</br>"
			+ data['error_message']);
	    } else {
			writeback("Transaction failed!");
	    }
	};
	
	function switch_new_request_type(type) {
		$('#new_request_tab_gift').removeClass('selected');
		$('#new_request_tab_request').removeClass('selected');
		$('#new_request_tab_guild').removeClass('selected');
		$('#new_request_tab_'+type).addClass('selected');
		
		$('#gift_requests').hide();
		$('#request_requests').hide();
		$('#guild_requests').hide();
		
		$('#'+type+'_requests').show();
	}

	function writeback(str) {
		//console.log(str);
		//document.getElementById('output').innerHTML=str;
	}
	
	function showExpansionMonsterInviteForm(monsterName, guild_creator_id, guild_created_at, slot, monster_slot) {
        showRequestForm(
            'Monster Invite',
            "First Lasts guild needs help constructing a siege weapon against a Guild Expansion Monster, " + monsterName + "!",
            'battle_expansion_monster,' + guild_creator_id + ',' + guild_created_at + ',' + slot + ',' + monster_slot,
            'action=battle_expansion_monster'
        );
    }
	
	function showMonsterInviteForm(monsterName, ownerName, owner, pool, mtype) {
        showRequestForm(
            'Monster Invite',
            "First Last is requesting your help to battle " + monsterName + " in Castle Age!",
            'battle_monster,' + ownerName + ',' + owner + ',' + pool + ',' + mtype,
            'action=battle_monster&mpool=' + pool + '&mname=' + monsterName + '&owner_id=' + owner + '&owner_name=' + ownerName 
        );
    }
	    
    function showRequestForm(tit, msg, track, request_params, excl_ids, reload_pg)
    {
    	filt = '';

		if(excl_ids && excl_ids != '') {
        	excl_ids = excl_ids.split(",");
    	}

    	FB.ui({ method: 'apprequests', 
        message: msg,
        data: track, 
        title: tit,
		filters: filt,
		exclude_ids: excl_ids,
		max_recipients: 20
        },
    	  function(result) {
  		  // fixes infinite looping for popup window if u close it before it is done loading
    	    $('.fb_dialog_iframe').each(function() { $(this).remove(); } );

        	if (result && result.request && result.to)
        	{
				
        		var request_id_string = result.to.join(',');
        		var request_id_array = result.to
				var request_id_count = result.to.length;
				var request_object_id = result.request;
                var params = 'ajax=1';
                    			$.ajax({ url: 'request_handler.php?'+request_params+'&request_ids='+request_id_string+'&request_object_id='+request_object_id, context: document.body, data: params, type: 'POST', 

    						success: function(data){
	
								if(reload_pg) {
									ajaxLinkSend('globalContainer', reload_pg);
								} else {
									if (request_id_count == 1) {
										var return_message = request_id_count + ' request sent!';
									}
									else {
										var return_message = request_id_count + ' requests sent!';
									}
									document.getElementById('results_container').innerHTML = return_message;
									FB.XFBML.parse(document.getElementById('results_container'));
									$('#results_container').show();
								}
			    			}
						}
					);

				
        	}
    	  }
    	  );
    }     

	function showFrictionlessRequestForm(tit, msg, track, request_params)
    {
		var user_ids= [];
		$.each($('.friend_to_invite:checked'), function() {
			var chkBox = $(this);
			user_ids.push(chkBox.val());
		});
	

    	FB.ui({ method: 'apprequests', 
        message: msg,
        data: track, 
		to: user_ids,
        title: tit
        },
    	  function(result) {
  		  // fixes infinite looping for popup window if u close it before it is done loading
    	    $('.fb_dialog_iframe').each(function() { $(this).remove(); } );
        	if (result && result.request && result.to)
        	{
				
        		var request_id_string = result.to.join(',');
        		var request_id_array = result.to
				var request_id_count = result.to.length;
        		
                var params = 'ajax=1';
                    			$.ajax({ url: 'request_handler.php?'+request_params+'&request_ids='+request_id_string, context: document.body, data: params, type: 'POST', 

    						success: function(data){
								if (request_id_count == 1) {
									var return_message = request_id_count + ' request sent!';
								}
								else {
									var return_message = request_id_count + ' requests sent!';
								}
								document.getElementById('results_container').innerHTML = return_message;
								FB.XFBML.parse(document.getElementById('results_container'));
								$('#results_container').show();
			    			    //alert('Requests Sent');
			    			}
						}
					);

				
        	}
    	  }
    	  );
    }

	function swapBattleTimeSelect(selector) {
		var remainder= $(selector).val()%2;
		if(remainder==0) {
			$('#single_popup_content #oddTimeBattle').hide();
			$('#single_popup_content #evenTimeBattle').show();
		} else {
			$('#single_popup_content #oddTimeBattle').show();
			$('#single_popup_content #evenTimeBattle').hide();
		}
	}

    $(document).ready(function() {
	  centerPopups();
	});
	
	function display_guild_equip_items(item_type) {
		$('#guild_class_equip_items .guild_equip_items:visible').slideUp();
		$('#guild_class_equip_items .expanded:visible').hide();
		$('#guild_class_equip_items .closed:hidden').show();
		if($('#'+item_type+'_items').is(":visible")) {
			$('#'+item_type+'_items').slideUp();
		} else {
			$('#'+item_type+'_items').slideDown();
			$('#'+item_type+'_header .expanded').show();
			$('#'+item_type+'_header .closed').hide();
		}
	}
	
	function set_equip_item(item_type, item_image, item_id) {
		var image_url= 'https://castleagegame1-a.akamaihd.net/graphics/'+item_image;
		var image_html= '<div onMouseOut="hideItemPopup(\'hover_info_'+item_id+'\',event);return false;" onMouseOver="showItemPopup(\'hover_info_'+item_id+'\', this, 53, 43);return false;">'+
						"<img src='"+image_url+"' style='width:65px;'/></div>";
		$('#guild_equip_slot_'+item_type).html(image_html);
		
		$('#class_equipment_item_'+item_type).val(item_id);
	}
	
	function unequip_item(item_type) {
		$('#guild_equip_slot_'+item_type).html('');
		$('#class_equipment_item_'+item_type).val('unset');
		$('.item_hover_info:visible').css('visibility','hidden');
	}
	
	function pickPower(class_id, cat, id) {
		
		var max_slots= $('#guild_class_max_slots').val();
		if($("#class_power_equipment_value").val()!='' && $("#class_power_equipment_value").val().split(';').length>=max_slots) {
			return;
		}
		
		var current_equip_value= $("#class_power_equipment_value").val();
		var power_id= class_id + '_' + cat + '_' + id;
		if(current_equip_value.length<=0) {
			current_equip_value= power_id;
		} else {
			current_equip_value += ';'+ power_id;
		}
		$("#class_power_equipment_value").val(current_equip_value);
		drawPickedPowers();
		$('#large_image_'+power_id).hide();
		$('#gray_image_'+power_id).show();
	}
	
	function unpickPower(class_id, cat, id) {
		var current_equip_value= $("#class_power_equipment_value").val();
		var power_id= class_id + '_' + cat + '_' + id;
		var new_current_equip_value='';
		$.each(current_equip_value.split(';'), function(index, cur_power_id) {
			if(cur_power_id!=power_id) {
				if(new_current_equip_value.length<=0) {
					new_current_equip_value= cur_power_id;
				} else {
					new_current_equip_value += ';'+ cur_power_id;
				}
			}
		});
		$("#class_power_equipment_value").val(new_current_equip_value);
		drawPickedPowers();
		$('#large_image_'+power_id).show();
		$('#gray_image_'+power_id).hide();
	}
	
	function drawPickedPowers() {
		var max_slots= $('#guild_class_max_slots').val();
		var current_slot=0;
		var current_equip_value= $("#class_power_equipment_value").val();
		if(current_equip_value!='') {

			$.each(current_equip_value.split(';'), function(index, cur_power_id) { 
				var power_info= cur_power_id.split('_');
				var image_url= 'https://castleagegame1-a.akamaihd.net/graphics/'+ $('#slot_image_'+cur_power_id).val();
				var image_html= '<div onclick="unpickPower('+power_info[0]+', '+power_info[1]+', '+power_info[2]+'); hideItemPopup(\'item_desc_'+cur_power_id+'\',event);return false;">'+
								"<img "+
									'onMouseOut="hideItemPopup(\'item_desc_'+cur_power_id+'\',event);return false;"'+
									'onMouseOver="showItemPopup(\'item_desc_'+cur_power_id+'\', this, 50, 40);return false;"'+
								  "src='"+image_url+"'/></div>";
			
				$('#open_power_slot_'+current_slot).html(image_html);
				current_slot+=1;		
			
			});
		}
		
		for(var i=current_slot; i<=max_slots;i++) {
			$('#open_power_slot_'+i).html('');
		}
	}
	
	function selectMonsterTarget(target) {
		$('div#monster_targets_container .collapsed_monster_target').show();
		$('div#monster_targets_container .expanded_monster_target').hide();
		$('div#monster_targets_container #collapsed_monster_target_'+target).hide();
		$('div#monster_targets_container #expanded_monster_target_'+target).show();
		$('.monster_health_bars').hide();
		$('#monster_health_bars_'+target).show();
		$('.target_monster_info').hide();
		$('#target_monster_info_'+target).show();
		$('.selected_target_keys').val(target);
	}
	
	var showHotSwapGen = false;
	var showHotSwapClass = false;
	function openRecentGenerals(refresh) {
		showHotSwapGen = true;
		$('#hot_swap_gen_incl_container').css('overflow', 'visible');
		$('#recent_general_swap_open').hide(); 
		$('#recent_general_swap_close').show(); 
		$('#recent_general_swap').show();
		$('#hot_swap_general_outer').attr('class', 'haveClick');

		params={};
		params['refresh'] = refresh;
		if($('#quickSwapLoaded').length==0) {
	        params['ajax']='1';
	        params['ajax_action']='get_generals_list';
	        			if(('#current_pg_url').length!=0) {
				params['postback_url']=$('#current_pg_url').val();
			} else {
				params['postback_url']='quests.php';
			}
			$.ajax({ url: 'hot_swap_ajax_handler.php', context: document.body, data: params, type: 'POST', success: function(data){
				$('#quickSwapGeneralsSection').html(data);
				$('#hot_swap_general_selection').val('gen_pin');
				hotSwapGeneralSort($('#hot_swap_general_selection').get(0));
			}});
		}
	}
	
	function closeRecentGenerals() {
		showHotSwapGen = false;
		$('#recent_general_swap_open').show(); 
		$('#recent_general_swap_close').hide(); 
		$('#recent_general_swap').hide();
		$('#hot_swap_general_outer').attr('class', 'noClick');

		if (showHotSwapGen == false && showHotSwapClass == false) {
			$('#hot_swap_gen_incl_container').css('overflow', 'hidden');
		}
	}

	function prepHotSwapRequest(a) {
		params = {};
        params['ajax']='1';
        params['ajax_action'] = a;
                return params;
	}

	function doHotSwapGeneralPin(i, t) {
		params = prepHotSwapRequest('pin_general');
        params['i'] = i;
        params['t'] = t;
        $.ajax({ url: 'hot_swap_ajax_handler.php', context: document.body, data: params, type: 'POST', success: function(data){
			if (data && data.length > 0) {
				$('#hot_swap_gen_incl_container').html(data);
			}
		}});
	}

	function doHotSwapGeneral(i, t, refresh) {
		params = prepHotSwapRequest('equip_general');
        params['i'] = i;
        params['t'] = t;
        if (refresh) {
        	params = 'item='+i+'&itype='+t+'&ajax=1';
	                	$.ajax({ url: 'generals.php', context: document.body, data: params, type: 'POST', success: function(data){
			    stopTimers=false;
			    ajaxPerforming=false;
				$('#AjaxLoadIcon').hide();
				if(data.lastIndexOf('<fb:')==-1) {
					$('#globalContainer').html(data);
				} else {
					if (data == null || data == '') {
						//temp fix
					} else {					
						document.getElementById('globalContainer').innerHTML = data;
						FB.XFBML.parse(document.getElementById('globalContainer'));
					}
				}
				centerPopups();
				startAllTimers();
			}});
        } else {
        	$.ajax({ url: 'hot_swap_ajax_handler.php', context: document.body, data: params, type: 'POST', success: function(data){
				if (data && data.length > 0) {
					$('#hot_swap_gen_incl_container').html(data);
				}
			}});
        }
	}

	function hotSwapSortF(v) {
		if (v == 'atk') {
			return function(a,b) { return b.atk - a.atk; };
		} else if (v == 'def') {
			return function(a,b) { return b.def - a.def; };
		} else if (v == 'name') {
			return function(a,b) { return a.name.localeCompare(b.name); };
		} else if (v == 'lvl') {
			return function(a,b) { return b.lvl - a.lvl; };
		} else if (v == 'phy_p') {
			return function(a,b) { return b.pierce - a.pierce; };
		} else if (v == 'phy_r') {
			return function(a,b) { return b.anti_pierce - a.anti_pierce; };
		} else if (v == 'f_o') {
			return function(a,b) { return b.f_off - a.f_off; };
		} else if (v == 'f_d') {
			return function(a,b) { return b.f_def - a.f_def; };
		} else if (v == 'w_o') {
			return function(a,b) { return b.w_off - a.w_off; };
		} else if (v == 'w_d') {
			return function(a,b) { return b.w_def - a.w_def; };
		} else if (v == 'e_o') {
			return function(a,b) { return b.e_off - a.e_off; };
		} else if (v == 'e_d') {
			return function(a,b) { return b.e_def - a.e_def; };
		} else if (v == 'wi_o') {
			return function(a,b) { return b.wi_off - a.wi_off; };
		} else if (v == 'wi_d') {
			return function(a,b) { return b.wi_def - a.wi_def; };
		} else if (v == 'gen_pin') {
			return function(a,b) { return b.pinned - a.pinned; };
		} else if (v == 'gen_recent') {
			return function(a,b) { return b.recent - a.recent; };
		} else {
			return function(a,b) { return a.name.localeCompare(b.name); };
		}
	}

	function hotSwapGeneralSort(s) {
		var v = s.options[s.selectedIndex].value;
		if (v.length < 1) {
			return;
		}

		if (!hotSwapGenList) {
			return;
		}

		var sorted = hotSwapGenList.sort(hotSwapSortF(v));
		var newList = "";
		for (var i = 0; i < sorted.length; i++) {
			var d = $('#hot_swap_gen_' + sorted[i].name);
			if (!d) continue;
			var t = d.clone().wrap('<div></div>').parent().html();
			if (!t) continue;
			newList += t;

			if (t == null) {
				console.log('html - ' + JSON.stringify(sorted[i]));
			}
		}
		$('#hot_swap_general_holder').html(newList);
	}

	function openHotSwapClass() {
		showHotSwapClass = true;
		$('#hot_swap_gen_incl_container').css('overflow', 'visible');
		$('#hot_swap_class_open').hide();
		$('#hot_swap_class_close').show();
		$('#hot_swap_class_div').show();
		$('#hot_swap_class_outer').attr('class', 'haveClick');
	}

	function closeHotSwapClass() {
		showHotSwapClass = false;
		$('#hot_swap_class_open').show();
		$('#hot_swap_class_close').hide();
		$('#hot_swap_class_div').hide();
		$('#hot_swap_class_outer').attr('class', 'noClick');

		if (showHotSwapClass == false && showHotSwapGen == false) {
			$('#hot_swap_gen_incl_container').css('overflow', 'hidden');
		}
	}

	function doHotSwapClass(cls) {
		params = prepHotSwapRequest('change_class');
        params['target_class'] = cls;
		$.ajax({ url: 'hot_swap_ajax_handler.php', context: document.body, data: params, type: 'POST', success: function(data){
			if (data && data.length > 0) {
				$('#hot_swap_gen_incl_container').html(data);
			}
		}});
	}

	function openHotSwapLoadouts() {
		$('#hot_swap_loadouts_open').hide();
		$('#hot_swap_loadouts_close').show();
		$('#hot_swap_loadouts_div').css('left', 445);
	}

	function closeHotSwapLoadouts() {
		$('#hot_swap_loadouts_open').show();
		$('#hot_swap_loadouts_close').hide();
		$('#hot_swap_loadouts_div').css('left', 370);
	}

	function scrollHotSwapLoadoutsDown(per, minT) {
		var t = $('#hot_swap_loadouts_content_div').position().top;
		t -= per;
		t = t < minT ? minT : t;
		$('#hot_swap_loadouts_content_div').animate({top:t});
	}

	function scrollHotSwapLoadoutsUp(per) {
		var t = $('#hot_swap_loadouts_content_div').position().top;
		t += per;
		t = t > 0 ? 0 : t;
		$('#hot_swap_loadouts_content_div').animate({top:t});
	}

	function doHotSwapLoadout(l) {
		params = prepHotSwapRequest('change_loadout');
        params['target_loadout'] = l;
		$.ajax({ url: 'hot_swap_ajax_handler.php', context: document.body, data: params, type: 'POST', success: function(data){
			if (data && data.length > 0) {
				$('#hot_swap_gen_incl_container').html(data);
			}
		}});
	}
	
	function switchNewsFeed(feed)
	{
	    params={};
	    params['ajax']='1';
	    	    params['feed']=feed;
	    $.ajax( { url: 'news_feed_view.php',
	              context: document.body, 
	              data: params, 
	              type: 'POST', 
	              success: function(data){$('#newsFeedSection').html(data);}
	             } );
	}
	
	function filterAlliesFeed(id, feeds) {
	    if(id == 100) {
	        for(i=0;i<feeds;i++) {
    	        $('#alliesFeed_'+i).show();
    	    }
    	    $('#alliesGiftAll').show();
	        $('#alliesArmyAll').show();
	    }
	    else {
	        for(i=0;i<feeds;i++) {
    	        if(i == id) {
    	            $('#alliesFeed_'+id).show();
	                $('#alliesGiftAll').hide();
	                $('#alliesArmyAll').hide();
    	            
    	            if(id == 0) {
    	                $('#alliesGiftAll').show();
    	            }
    	            
    	            if(id == 1) {
    	                $('#alliesArmyAll').show();
    	            }
    	        } else {
    	            $('#alliesFeed_'+i).hide();
    	        }
    	    }
	    }
	}
	
	function switchTabSection(url, id, tab)
	{
	    params={};
	    params['ajax']='1';
	    	    params['tab']=tab;
	    $.ajax( { url: url,
	              context: document.body,
	              data: params, 
	              type: 'POST', 
	              success: function(data){$('#'+id).html(data);}
	             } );
	}
	
	function filterFeeds(base_name, id, feeds) {
        for(i=0;i<feeds;i++) {
	        if(i == id) {
	            $('#'+base_name+id).show();
	        } else {
	            $('#'+base_name+i).hide();
	        }
	    }
	}
	
	function clearInputField(id, defaultString, replacementString) {
	    if($('#'+id).val() == defaultString) {
	        $('#'+id).val(replacementString);
	    }
	}
	
	function ajaxConquestQuickPop(parent, quick_view, data_string)
	{
		var topOffset = parent.offsetTop + 420;
		var leftOffset = parent.offsetLeft - 52;
		var tab = data_string+'_'+topOffset+'_'+leftOffset;
		switchTabSection('conquest_expansion_quick_view.php',quick_view,tab);
	}
	
    // conquest loe battle
	function towerTabClick(tower_id)
	{
		// handle tower tabs
		$('.tower_tab').hide();
		$('#tower_tab_'+tower_id).show();
		
		// handle defender/fortification tabs
		$('.defender_on').hide();
		$('.fortification_on').hide();
		$('#defender_on_'+tower_id).show();
		
		// handle leaderboard tabs
		$('.leaderboard_block').hide();
		$('#top_leaderboard_'+tower_id).show();
		
		// handle actions left tabs
		$('.actions_left_block').hide();
		$('#actions_left_'+tower_id).show();
		
		// handle body
		$('.tower_body').hide();
		$('.tower_fort').hide();
		$('#tower_'+tower_id).show();
		
		// handle quick join popup
		$('.defender_quick_join').hide();
		$('#defender_quick_join_'+tower_id).show();

        // handle start/join war popups
        $('.optin_pop').hide();
        $('#optin_pop_'+tower_id).show();
	}
	
	function fortTabClick(tower_id)
	{
		// handle tabs
		$('.defender_on').hide();
		$('#fortification_on_'+tower_id).show();
		
		// handle body
		$('.tower_body').hide();
		$('#tower_fort_'+tower_id).show();
	}
	
	function defenderTabClick(tower_id)
	{
		// handle tabs
		$('.fortification_on').hide();
		$('#defender_on_'+tower_id).show();
		
		// handle body
		$('.tower_fort').hide();
		$('#tower_'+tower_id).show();
	}

    function showConquestReport()
    {
        var bg_height = $(document.body).height();
        $('#conquest_report_dark_bg').css('height', bg_height);
        $('#conquest_report_dark_bg').show();
        $('#conquest_report').show();
        return false;
    }

    function hideConquestReport()
    {
        $('#conquest_report_dark_bg').hide();
        $('#conquest_report').hide();
        return false;
    } 

	function milestoneBarExpand()
	{
		
		$('#milestone_progress_bar').show();
		$('#collapse_progress_bar').show();
		$('#expand_progress_bar').hide();
		$('#milestone_progress_bar_collasped').hide();
		
	}
	
	function milestoneBarCollapse()
	{
		
		$('#milestone_progress_bar').hide();
		$('#collapse_progress_bar').hide();
		$('#expand_progress_bar').show();
		$('#milestone_progress_bar_collasped').show();
		
		
	}
	
	
	function showMilestones(start, lastCompletedStage){
		
		var displayedMilestones = 7;
		var maxMilestones = 9
		
		//clamp start
		if (start < 0)
			start = 0;
		if (start > maxMilestones - displayedMilestones)
			start = maxMilestones - displayedMilestones;
			
		var end = start + displayedMilestones;
		
		//alert("This is showMilestones. start end" +  start + " " +  (start + 7));
		
		//Hides other scroll buttons
		for (i = 0; i < maxMilestones; i++)
		{
			var forwardBtn = $('#milestone_forward_' + i);
			var backwardBtn = $('#milestone_backward_' + i); 
			forwardBtn.hide();
			backwardBtn.hide(); 	
		}
		
		//Enables scroll btns for this position
		var forwardBtn = $('#milestone_forward_' + start);
		var backwardBtn = $('#milestone_backward_' + start); 
				
		if (forwardBtn.length != 0 && backwardBtn.length != 0){
			forwardBtn.show();
			backwardBtn.show(); 
		} 
		
		//Milestone Images
		for (i = 0; i < maxMilestones; i++){
			var milestone_image = $('#milestone_' + i);
			if (i >= start && i < end){
				milestone_image.show();
			}
			else{
				milestone_image.hide();	
			}	
		}
		
		//check mark images
		for (i = 0; i < displayedMilestones; i++){
			var checkmark_image = $('#checkmark_' + i);
			if (i + start < lastCompletedStage){
				checkmark_image.show();
			}
			else{
				checkmark_image.hide();	
			}	
		}
		
		for (i = 0; i < displayedMilestones; i++){
			document.getElementById('progress_bar_num_' + i).innerHTML = i  + start + 1;
		}

		//Setup the progress bar
		//Format for the images is milestone_(stage)_(filled)
		//where _1 = empty, _2 = partly filled, _3, completely filled

		var startingProgressImage = 0;
		if (start  == 0)
		{
			//alert("Setting up bar start");
			
			
			for (i = 0; i < 3; i++){
				var progress_bar_start = $('#progress_bar_start_' + i);
				var progress_bar_image = $('#progress_bar_0_' + i);
				if (lastCompletedStage == i || (i == 2 && lastCompletedStage > 2)){
				//	alert("Choosing progress_bar_start_" + i );
					
					progress_bar_image.hide();
					progress_bar_start.show();
				}
				else{
					progress_bar_start.hide();
					progress_bar_image.hide();
					
				}
				
			}
			startingProgressImage = 1;
		}
		else{
			for (i = 0; i < 3; i++){
				var progress_bar_start = $('#progress_bar_start_' + i);
				progress_bar_start.hide();
			}
		}
		
		for (i = startingProgressImage; i <= displayedMilestones; i++)
		{			
			for (j = 0; j < 3; j++){
				var progress_bar_image = $('#progress_bar_' + i + '_' + j);
				
				if (i + start + 1  > lastCompletedStage && j == 0){
					progress_bar_image.show();
				}else if (i + start + 1 == lastCompletedStage && j == 1){
					progress_bar_image.show();
				}else if (i + start + 1 < lastCompletedStage && j == 2){
					progress_bar_image.show();
				}else{
					progress_bar_image.hide();
				}	
			}
		}		
	} 
	
	function updateMilestoneDescription(milestone){
		
		var maxMilestones = 9
		
		for (i = 0; i < maxMilestones; i++)
		{
			var description = $('#milestone_description_' + i);
			var bot_title = $('#bot_title_'+i);
			var top_title = $('#top_title_'+i);
			var reward_txt = $('#reward_txt_'+i);
			if ( i == milestone){
				description.show();
				bot_title.show();
				top_title.show();
				reward_txt.show();
			}else{
			 	description.hide();
				bot_title.hide();
				top_title.hide();
				reward_txt.hide();
			}
		}

	}
	
</script>
<style type="text/css">

/* * { margin: 0; padding: 0 ;} */
	
#main_bntp
{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/topdiv2.jpg');
	background-repeat: repeat-x;
	height: 25px;
	padding: 0 0 0 0;
	width: 760px;
}

#main_bn.quests_stage_1 {
	background: url('https://castleagegame1-a.akamaihd.net/graphics/banner_quest_01.jpg')  no-repeat top left;
}

#main_bn.quests_stage_2 {
	background: url('https://castleagegame1-a.akamaihd.net/graphics/banner_quest_02.jpg')  no-repeat top left;
}

#main_bn.quests_stage_3 {
	background: url('https://castleagegame1-a.akamaihd.net/graphics/banner_quest_03.jpg')  no-repeat top left;
}

#main_bn.quests_stage_4 {
	background: url('https://castleagegame1-a.akamaihd.net/graphics/banner_quest_04.jpg')  no-repeat top left;
}

#main_bn.quests_stage_5 {
	background: url('https://castleagegame1-a.akamaihd.net/graphics/banner_quest_05.jpg')  no-repeat top left;
}

#main_bn.quests_stage_6 {
	background: url('https://castleagegame1-a.akamaihd.net/graphics/banner_quest_06.jpg')  no-repeat top left;
}

#main_bn.quests_stage_7 {
	background: url('https://castleagegame1-a.akamaihd.net/graphics/banner_quest_07.jpg')  no-repeat top left;
}

#main_bn.quests_stage_8 {
	background: url('https://castleagegame1-a.akamaihd.net/graphics/banner_quest_08.jpg')  no-repeat top left;
}

#main_bn.quests_stage_9 {
	background: url('https://castleagegame1-a.akamaihd.net/graphics/banner_quest_09.jpg')  no-repeat top left;
}

#main_bn.quests_stage_10 {
	background: url('https://castleagegame1-a.akamaihd.net/graphics/banner_quest_10.jpg')  no-repeat top left;
}

#main_bn.quests_stage_11 {
	background: url('https://castleagegame1-a.akamaihd.net/graphics/banner_quest_11.jpg')  no-repeat top left;
}

#main_bn.quests_stage_12 {
	background: url('https://castleagegame1-a.akamaihd.net/graphics/banner_quest_12.jpg')  no-repeat top left;
}

#main_bn.quests_stage_13 {
	background: url('https://castleagegame1-a.akamaihd.net/graphics/banner_quest_13.jpg')  no-repeat top left;
}

#main_bn.quests_stage_14 {
	background: url('https://castleagegame1-a.akamaihd.net/graphics/banner_quest_01.jpg')  no-repeat top left;
}

#main_bn.quests_stage_15 {
	background: url('https://castleagegame1-a.akamaihd.net/graphics/banner_quest_15.jpg')  no-repeat top left;
}

#main_bn.quests_stage_16 {
	background: url('https://castleagegame1-a.akamaihd.net/graphics/banner_quest_16.jpg')  no-repeat top left;
}

#main_bn.quests_stage_17 {
	background: url('https://castleagegame1-a.akamaihd.net/graphics/banner_quest_17.jpg')  no-repeat top left;
}

#main_bn.quests_stage_18 {
	background: url('https://castleagegame1-a.akamaihd.net/graphics/banner_quest_18.jpg')  no-repeat top left;
}

#main_bn.quests_stage_19 {
	background: url('https://castleagegame1-a.akamaihd.net/graphics/banner_quest_19.jpg')  no-repeat top left;
}

#main_bn.quests_stage_20 {
	background: url('https://castleagegame1-a.akamaihd.net/graphics/banner_quest_20.jpg')  no-repeat top left;
}

#main_bn.quests_stage_21 {
	background: url('https://castleagegame1-a.akamaihd.net/graphics/banner_quest_21.jpg')  no-repeat top left;
}

#main_bn.quests_stage_22 {
	background: url('https://castleagegame1-a.akamaihd.net/graphics/banner_quest_22.jpg')  no-repeat top left;
}


#main_bn.symbolquests_stage_1 {
	background: url('https://castleagegame1-a.akamaihd.net/graphics/banner_symbolquest_01.jpg')  no-repeat top left;
}

#main_bn.symbolquests_stage_2 {
	background: url('https://castleagegame1-a.akamaihd.net/graphics/banner_symbolquest_02.jpg')  no-repeat top left;
}

#main_bn.symbolquests_stage_3 {
	background: url('https://castleagegame1-a.akamaihd.net/graphics/banner_symbolquest_03.jpg')  no-repeat top left;
}

#main_bn.symbolquests_stage_4 {
	background: url('https://castleagegame1-a.akamaihd.net/graphics/banner_symbolquest_04.jpg')  no-repeat top left;
}

#main_bn.symbolquests_stage_5 {
	background: url('https://castleagegame1-a.akamaihd.net/graphics/banner_symbolquest_05.jpg')  no-repeat top left;
}

#main_bn.monster_quests_stage_1 {
	background: url('https://castleagegame1-a.akamaihd.net/graphics/banner_monster_quests_01.jpg')  no-repeat top left;
}

#main_bn
{
	background: url('https://castleagegame1-a.akamaihd.net/graphics/mainnav_banner.jpg')  no-repeat top left;
	height: 185px;
	text-align: right;
	padding: 0 0 0 0;
	font-size: 11px;
	width:100%;
	overflow:hidden;
}



.lvl_table {}

.lvl_table .right_col {
	width: 490px ;
}

.lvl_table .left_col {}

.shield_wait
{
	width: 760px;
	text-align: center;
	z-index: 999;
	display: none;
	position: absolute;
	top: 250px;
	left: 0px;
}

#nvbar
{
	height: 32px;
	background-color: #000;
	overflow:hidden;
}

#nvbar_nvl
{
	overflow:hidden;
	height:30px;
	width:760px;
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/nvbar_inside.gif');
	background-repeat: repeat-x;
	font-weight:normal;
}

#nvbar_table td
{
	color: #F9D946;
	font-weight: bold;
}

#nvbar_table td a:hover {
	color: white;
}

.nvbar_start
{
	float:left;
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/nvbar_start.gif');
	background-repeat: no-repeat;
	height:30px;
	width:7px;
}

.nvbar_end
{
	float:left;
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/nvbar_end.gif');
	background-repeat: no-repeat;
	height:30px;
	width:7px;
}

.nvbar_middle
{
	float:left;
	height:30px;
	padding-top:3px;
	color:#55a5ff;
}

.nvbar_middle a
{
	color:#55a5ff;
}

#nvbar_div_end
{
	width:760px;
	height:13px;
	overflow:hidden;
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/header_div.jpg');
	background-repeat: no-repeat;
}

#main_sts
{
	height: 70px;
	width: 760px;
	background: url('https://castleagegame1-a.akamaihd.net/graphics/statsbar.jpg')  no-repeat top left;
}

#main_ststb
{
	height: 13px;
	padding-top: 13px;
	border-spacing:0;
	margin:0 0 0 0;
	text-align:center;
	font-family: "Times New Roman";
}

#main_ststb td
{
	color: #66401b;
}

#st_row_1
{
	color:#197b30;
	height:15px;
	overflow:hidden;
	float:left;
}

#st_row_2
{
	color:#000000;
	width:100%;
}

#st_1
{
	float:left;
	margin: 0 0 0 73px;
	overflow:hidden;
	width:91px;
	height:15px;
	visibility:visible;
}

#st_2
{
	float:left;
	margin: 0 0 0 77px;
	overflow:hidden;
	width:70px;
	height:15px;
	visibility:visible;
}

#st_3
{
	float:left;
	margin: 0 0 0 72px;
	overflow:hidden;
	width:73px;
	height:15px;
	visibility:visible;
}

#st_4
{
	float:left;
	margin: 0 0 0 81px;
	overflow:hidden;
	width:65px;
	height:15px;
	visibility:visible;
}

#st_5
{
	float:left;
	margin: 4px 0 0 14px;
	overflow:hidden;
	width:126px;
	height:15px;
}


#st_2_1
{
	float:left;
	margin: 0 0 0 40px;
	overflow:hidden;
	width:162px;
	height:19px;
	color:#000000;
	text-align:left;
}

#st_2_2
{
	float:left;
	margin: 0 0 0 0;
	overflow:hidden;
	width:111px;
	height:19px;
	color:#000000;
	text-align:left;
}

#st_2_3
{
	float:left;
	margin: 0 0 0 36px;
	overflow:hidden;
	width:109px;
	height:19px;
	color:#000000;
	text-align:left;
}

#st_2_4
{
	float:left;
	margin: 0 0 0 36px;
	overflow:hidden;
	width:109px;
	height:19px;
	color:#000000;
	text-align:left;
}

#st_2_5
{
	float:left;
	margin: 0 0 0 13px;
	overflow:hidden;
	width:134px;
	height:19px;
	color:#000000;
	text-align:center;
}

.chatOptionHoverDiv {
	visibility:hidden;
	z-index:101;
	top:0px;
	left:0px;
	position:absolute;
	width:100px;
	overflow:hidden;
	background-color:white;
	border:1px solid black;
}

.chatOptionHoverText {
	font-size:11px;
	text-align:center;
	padding:3px;
	font-family:Verdana;
}

</style><style type="text/css">

body{
	padding:0px;
	margin:0px;	
}

form{
	padding:0px;
	margin:0px;
}

select {
    border: 1px solid #BDC7D8;
    font-family: "lucida grande",tahoma,verdana,arial,sans-serif;
    font-size: 11px;
    padding: 2px;
}

.game {
	text-align:left;
}

.friend_visible{
display:block;	
}

.friend_hidden{
display:none;	
}

.imgButton:hover{
opacity: .85;
filter: alpha(opacity=85);	
cursor: hand;
}

.imgButtonReverse{
opacity: .5;
-moz-opacity:.50;
filter: alpha(opacity=50);	
cursor: hand;
}

.imgButtonReverse:hover{
opacity: 1.0;
filter: alpha(opacity=100);
-moz-opacity:1.0;
cursor: hand;
}

.imgButtonBack {
width:160px;
height:160px;
background-color:#ffffff;
}

.imgButtonRevBack {
width:160px;
height:160px;
background-color:#000000;
}

.tabBtnTrain
{
	width:200px;
	height:44px;
}

.news_feed_container{
	height:180px;
	cursor: pointer;
}


.news_feed{
	padding: 7px;
	margin: 0 0 0 25px;
	padding:22px 0 0 33px;
	min-height:145px;
	color:black;   
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/newsfeed_back.jpg');
	background-repeat: no-repeat;
}

.news_feed:hover{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/newsfeed_back_h.jpg');
}

.stream{
	padding: 7px;
	margin: 20px 0 10px 20px;
	background-color: #d0b683;
	border: 1px solid #7b4215;
	width: 450px;
	color:black;
}


.stream .streamImg{
	float:left; 
	width:90px; 
	padding-right:15px;
}

.stream .streamName{
	padding-bottom:5px;
	font-weight:bold;
}

.stream .streamCaption{
	padding-bottom:5px;
	font-size:90%;
}


.stream .streamDesc{
	padding-bottom:5px;
	font-size:90%;
}

.stream .streamText{
	float:left; 
	width:335px; 
	padding-right:5px;
}

.shield_wait
{
	width: 760px;
	text-align: center;
	z-index: 999;
	display: none;
	position: absolute;
	top: 250px;
	left: 0px;
}

.tabBtnTrain:hover
{
	background-color:#ffffff;
}

.tabBtn
{
	height:44px;
}

.tabBtn:hover
{
	background-color:#ffffff;
}

.tabBtnPreview
{
	width:204px;
	height:216px;
}

.tabBtnPreview:hover
{
	background-color:#ffffff;
}

.tabBtnPreviewPlay
{
	width:412px;
	height:48px;
}

.tabBtnPreviewPlay:hover
{
	background-color:#ffffff;
}

.tabBtnPreviewPlay2
{
	width:304px;
	height:48px;
}

.tabBtnPreviewPlay2:hover
{
	background-color:#ffffff;
}

#tab_big_1, #tab_big_2, #tab_big_3, #tab_big_4 {
	display:none;
}

#achievements_1, #achievements_2, #achievements_3, #achievements_4 {
	display:none;
}

#choose_class_screen .banner_warrior, .banner_rouge, .banner_mage, .banner_cleric, {
	height:144px;
	width:690px;
}
#choose_class_screen  .banner_rouge{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/nm_class_top_rouge.jpg');
}
#choose_class_screen .banner_warrior{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/nm_class_top_warrior.jpg');
}
#choose_class_screen .banner_mage{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/nm_class_top_mage.jpg');
}
#choose_class_screen .banner_cleric{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/nm_class_top_cleric.jpg');
}
#choose_class_screen #choose_class_header{
		background-image: url('https://castleagegame1-a.akamaihd.net/graphics/nm_class_header.jpg');
}

#achievement_main_container.show_achievement_1 #tab_small_1, 
#achievement_main_container.show_achievement_2 #tab_small_2,
#achievement_main_container.show_achievement_3 #tab_small_3,
#achievement_main_container.show_achievement_4 #tab_small_4,
#achievement_main_container.show_achievement_1 #tab_space_1,
#achievement_main_container.show_achievement_2 #tab_space_2,
#achievement_main_container.show_achievement_3 #tab_space_3,
#achievement_main_container.show_achievement_4 #tab_space_4 {
	display:none;
}

#achievement_main_container.show_achievement_1 #tab_big_1,
#achievement_main_container.show_achievement_2 #tab_big_2,
#achievement_main_container.show_achievement_3 #tab_big_3,
#achievement_main_container.show_achievement_4 #tab_big_4,
#achievement_main_container.show_achievement_1 #achievements_1,
#achievement_main_container.show_achievement_2 #achievements_2,
#achievement_main_container.show_achievement_3 #achievements_3,
#achievement_main_container.show_achievement_4 #achievements_4{
	display:block;
}

.show_attack #attack_log, .show_chat #chat_log, .show_siege #siege_log, .show_loot #loot_log, .show_monster_invite #monster_invite, .show_alchemy #alchemy_log, 
.show_general #general_log, .show_monster #monster_log, .show_battle #battle_log, .show_quest #quest_log, .show_cta #cta_log, .show_arena #arena_log {
	display:block;
}

#chat_log, #attack_log, #siege_log, #loot_log, #monster_invite, #alchemy_log {
	display:none;
}

#general_log, #monster_log, #battle_log, #quest_log, #cta_log, #arena_log {
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/guild_main_chat_middle.jpg');
	background-repeat:repeat-y;
	display:none;
}

.upgrade_stats_message{
	margin:3px 3px 10px 10px;
	background-color:#D0B682;
	height:55px;
	border:1px solid #701919;
	width:715px;
}

.upgrade_stats_message_inc{
	vertical-align:middle;
	padding:13px 10px 0 10px;
	color:#4B3715;
	text-align:center;
}

.upgrade_stats_message_inc img{
	vertical-align:middle;
}

.keep_main_section{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/keep_pg_main.jpg');
	background-repeat: no-repeat;
	width:720px;
	height:323px;
	margin-left:10px;
	overflow:hidden;
	color:black;
}

.keep_healer_section{
	float:left;
	width:250px;
	height:33px;
	text-align:center;
	margin-top:260px;
}

#cost_to_heal{
	color:white;
	white-space:nowrap;
}

.keep_main_section .keep_attribute_section{
	height:323px;
	width:455px;
	float:left;
}

.keep_main_section .keep_attribute_section .keep_stat_title{
	height:90px;
}

.keep_main_section .keep_attribute_section .keep_stat_title .keep_stat_title_inc{
	padding: 35px 0 0 50px;
}

.keep_main_section .keep_attribute_section .keep_attribute{
	height:36px;
}

.keep_main_section .keep_attribute_section .keep_attribute .add_attribute_button_container{
	height:33px;
	width:32px;
	padding:3px 0 0 5px;
	margin-left:27px;
	float:left;
}

.keep_main_section .keep_attribute_section .keep_attribute .attribute_stat_container{
	height:29px;
	width:75px;
	padding:7px 0 0 0;
	font-size:14px;
	font-weight:bold;
	float:left;
}

.keep_main_section .keep_attribute_section .keep_attribute .attribute_stat_name{
	height:29px;
	padding:7px 0 0 35px;
	font-size:14px;
	float:left;
}

.keep_main_section .keep_attribute_section .keep_attribute .attribute_stat_name span{
	font-size:11px;
}
#battle_trophy_tab_v2,#monster_trophy_tab_v2,#banner_trophy_tab_v2,#market_trophy_tab_v2 {
	cursor:pointer;
	height:24px;
	width:145px;
	float:left;
	margin-bottom:9px;
}

.show_battle #battle_trophy_tab_v2 {
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guild_home_battlemed_on.jpg');
}

.show_monster #monster_trophy_tab_v2 {
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guild_home_monstermed_on.jpg');
}

.show_banner #banner_trophy_tab_v2 {
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guild_home_banners_on.jpg');
}

.show_market #market_trophy_tab_v2 {
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guild_home_market_on.jpg');
}

#battle_trophy_tab_v2 {
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guild_home_battlemed_off.jpg');
}

#monster_trophy_tab_v2 {
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guild_home_monstermed_off.jpg');
}

#banner_trophy_tab_v2 {
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guild_home_banners_off.jpg');
}

#market_trophy_tab_v2 {
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guild_home_market_off.jpg');
}

#battle_trophy_log_v2, #monster_trophy_log_v2, #banner_trophy_log_v2, #market_trophy_log_v2 {
	display:none;
	overflow-y:auto; 
	padding:10px 40px 15px 50px;
	height:190px;
	width:600px;
	color:white;
}


.show_battle #battle_trophy_log_v2, .show_monster #monster_trophy_log_v2, .show_banner #banner_trophy_log_v2, .show_market #market_trophy_log_v2 {
	display:block;
}

.show_general #general_log_tab_v2 {
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/conq2_btn_chaton.jpg');
}

.show_monster #monster_log_tab_v2 {
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/conq2_btn_monsteron.jpg');
}

.show_battle #battle_log_tab_v2{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/conq2_btn_battleson.jpg');
}

.show_cta #cta_log_tab_v2 {
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/conq2_btn_updateson.jpg');
}

#general_log_tab_v2 {
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/conq2_btn_chatoff.jpg');
}

#monster_log_tab_v2 {
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/conq2_btn_monsteroff.jpg');
}

#battle_log_tab_v2{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/conq2_btn_battlesoff.jpg');
}

#cta_log_tab_v2 {
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/conq2_btn_updatesoff.jpg');
}

#general_log_tab_v2, #monster_log_tab_v2, #battle_log_tab_v2, #cta_log_tab_v2{
	cursor:pointer;
	height:23px;
	width:126px;
	float:left;
}

.show_attack #attack_log_tab, .show_chat #chat_log_tab, .show_siege #siege_log_tab, .show_loot #loot_log_tab, 
.show_monster_invite #monster_invite_tab, .show_alchemy #alchemy_log_tab, .show_monster #monster_tab, .show_guard #guard_tab{
	background-color:#8c562a;
	color:white;
}

.show_general #general_log_tab, .show_monster #monster_log_tab, .show_battle #battle_log_tab, .show_quest #quest_log_tab, .show_cta #cta_log_tab,.show_arena #arena_log_tab{
	background-color:#c6a56f;
}

#general_log_tab, #monster_log_tab, #battle_log_tab, #quest_log_tab, #cta_log_tab, #arena_log_tab{
	cursor:pointer;
	height:25px;
	width:100px;
	text-align:center;
	float:left;
	margin-top:10px;
	color:black;
	background-color:#ababab;
	margin:0 5px 0 0;
	font-size:12px;
}

#attack_log_tab, #chat_log_tab, #siege_log_tab, #loot_log_tab, #alchemy_log_tab, #monster_tab, #guard_tab{
	cursor:pointer;
	height:35px;
	width:120px;
	text-align:center;
	float:left;
	margin-top:10px;
	background-color:#c6a56f;
	color:black;
}

#monster_invite_tab{
	cursor:pointer;
	height:25px;
	padding-top:10px;
	width:170px;
	text-align:center;
	float:left;
	margin-top:10px;
	background-color:#c6a56f;
	color:black;	
}

.achievement_overview{
	margin: 14px 0 0 34px;
	width:641px;
}

.achievement_overview table{
	width:641px;
}

.achievement_overview table tr.achievement_row_1 td, .achievement_overview table tr.achievement_row_2 td{
	padding-left: 25px; 
	padding-right: 25px; 
	width:270px; 
	font-size:14px; 
}

.achievement_overview .achievement_header{
	height: 23px; 
	padding:3px 0 0 15px; 
	font-size:18px;
	font-weight:600;
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/achieve_back_1.jpg');
}

.achievement_overview .achievement_row_1{
	height:22px;
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/achieve_back_2.jpg');
}

.achievement_overview .achievement_row_2{
	height:22px;
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/achieve_back_3.jpg');
}

#alchemy_item_tab{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/tab_recipes_off.gif');
}

#alchemy_monster_tab{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/tab_summons_off.gif');
}

.show_items #alchemy_item_tab{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/tab_recipes_on.gif');
}

.show_monsters #alchemy_monster_tab{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/tab_summons_on.gif');
}

.show_quests #alchemy_quest_tab{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/tab_quests_on.gif');
}

#alchemy_quest_tab{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/tab_quests_off.gif');
}

.show_class #alchemy_class_tab{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/tab_classpowers_on.gif');
}

#alchemy_class_tab{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/tab_classpowers_off.gif');
}

.show_items #alchemy_item_tab, .show_monsters #alchemy_monster_tab, .show_quests #alchemy_quest_tab{
	color:black;
}

.show_items .alchemySpaceRecipe, .show_monsters .alchemySpaceMonster, .show_quests .alchemySpaceQuest, .show_class .alchemySpaceClass{
	display:block;
}

.alchemySpaceMonster, .alchemySpaceRecipe, .alchemySpaceQuest, .alchemySpaceClass{
	display:none;
}

#alchemy_item_tab, #alchemy_monster_tab, #alchemy_quest_tab, #alchemy_class_tab{
	margin-left:10px;
	cursor:pointer;
	height:45px;
	width:144px;
	text-align:center;
	float:left;
	margin-top:10px;
	color:white;
}

.show_monsters .alchemyRecipeBackMonster, .show_quests .alchemyQuestBack, .show_items .alchemyRecipeBack, .show_class .alchemyRecipeBackClass{
	display:block;
}

#action_logs{
	margin-left: 10px;
}

#attack_log_tab, #siege_log_tab, #loot_log_tab, #monster_invite_tab, #alchemy_log_tab{
	margin-left:10px;
}

#chat_log_tab{
	margin-left:20px;
}


.show_battle_trophy #battle_trophy_tab, .show_monster_trophy #monster_trophy_tab, .show_standard_trophy #standard_trophy_tab{
	background-color:#c6a56f;
}

.show_battle_trophy #battle_trophy_container, .show_monster_trophy #monster_trophy_container, .show_standard_trophy #standard_trophy_container{
	display:block;
}

#battle_trophy_container, #monster_trophy_container, #standard_trophy_container{
	display:none;	
}

#battle_trophy_tab,#monster_trophy_tab, #standard_trophy_tab{
	cursor:pointer;
	height:25px;
	width:150px;
	text-align:center;
	float:left;
	margin-top:10px;
	color:black;
	background-color:#ababab;
	margin:0 5px 0 0;
	font-size:12px;
}






.itm_req
{
	padding:5px;
}


#land_buy_desc
{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/land_buy_info.gif');
	background-repeat: no-repeat;
	width:740px;
	height:117px;
	overflow:hidden;
	color:#000000;
}

.land_buy_row
{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/land_buy_back.jpg');
	background-repeat: no-repeat;
	height:99px;
	overflow:hidden;
	color:#000000;
}

.land_buy_image
{
	float:left;
	height:99px;
	width:170px;
}

.land_buy_image2
{
	float:left;
	height:75px;
	width:170px;
}

.land_buy_image_int
{
	padding:11px 0 0 20px;
}

.land_buy_info
{
	float:left;
	width:300px;
	height:99px;
	overflow:hidden;
}

.land_buy_info2
{
	float:left;
	width:300px;
	height:85px;
	overflow:hidden;
}

.land_buy_info_int
{
	padding:15px 0px 0 10px;
	color:#000000;
}

.land_buy_costs
{
	float:left;
	padding: 17px 0 0 20px;
	height:74px;
	width:240px;
	overflow:hidden;
	color:#000000;
}

.land_buy_row_unique
{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/land_buy_back_extra.jpg');
	background-repeat: no-repeat;
	height:192px;
	overflow:hidden;
	color:#000000;
}

.land_buy_text
{
	padding:8px 0 0 27px;
	color:#000000;
}

.eq_buy_row
{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/eq_buy_back.jpg');
	background-repeat: no-repeat;
	width:747px;
	height:98px;
	overflow:hidden;
	color:#000000;
}

.eq_buy_row2
{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/eq_buy_back2.jpg');
	background-repeat: no-repeat;
	width:747px;
	height:98px;
	overflow:hidden;
	color:#000000;
}

.eq_buy_image
{
	float:left;
	padding:4px 0 0 24px;
}

.eq_buy_txt
{
	width:180px;
	height:54px;
	float:left;
}

.eq_buy_txt_int
{
	padding:12px 0 0 20px;
	color:#000000;
}

.eq_buy_stats
{
	width:150px;
	float:left;
}

.eq_buy_stats_int
{
	padding:15px 0 0 40px;
	color:#78431E;
	font-family:Times New Roman;
	font-weight:bold;
}

.eq_buy_costs
{
	float:left;
	height:86px;
	width:295px;
	overflow:hidden;
}

.eq_buy_costs_int
{
	padding: 12px 0 0 55px;
	color:#000000;
}

#hero_buy_desc
{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/hero_buy_info.gif');
	background-repeat: no-repeat;
	width:740px;
	height:117px;
	overflow:hidden;
	color:#000000;
}

.hero_buy_row
{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/hero_buy_back.jpg');
	background-repeat: no-repeat;
	width:740px;
	height:208px;
}

.hero_buy_info
{
	height:97px;
	width:500px;
	overflow:hidden;
	color:#000000;
}

.hero_buy_costs
{
	float:left;
	padding: 1px 0 0 28px;
	overflow:hidden;
}

.hero_buy_image
{
	padding-left:32px;
	width:162px;
}

img {
	border: none;
}

#app_body
{
	font-size: 14px;
	padding: 10px;
	background-color: #000;
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/bg_jobs_tile.jpg');
}

.title
{
	font-size: 22px;
	margin-bottom: 5px;
}

.title_action
{
	font-size: 14px;
}

table.main
{
	width: 98%;
	font-size: 14px;
	margin-bottom: 20px;
}

table.main tr
{
	width: 740px;
	height:27px;
}

table.main th
{
	font-size: 14px;
	text-align: left;
	vertical-align: top;
}

table.main td
{
	font-size: 14px;
	height:27px;
}

div.text
{
	margin: 10px 0px 10px 0px;
}

.line
{
	border-bottom: 1px solid;
}

.bluelink
{
	color:#55A5FF;
}
td.bluelink a,
td.bluelink a:link,
td.bluelink a:visited,
div.bluelink a,
div.bluelink a:link,
div.bluelink a:visited
{
	color:#881616;
	font-size:19px;
}

table.layout
{
	margin: 0;
	border: 0;
	padding: 0;
	border-spacing: 0;
}

table.layout tr
{
	margin: 0;
	border: 0;
	padding: 0;
}

table.layout td
{
	margin: 0;
	border: 0;
	padding: 0;
}

.title
{
	font-size: 22px;
	padding: 0 0 0 35px;
	color: #000000;
}

.land_buy_title
{
	padding: 0 0 0 10px;
	color:#000000;
}

.land_buy_title_h1
{
	font-size: 22px;
}

.lvlBr
{
	width:126px;
}

.castle_profile
{
	background: url('https://castleagegame1-a.akamaihd.net/graphics/fb_profile2.jpg') no-repeat top left;
	width:183px;
	height:213px;
	overflow:hidden;
}

.quests_background
{
	background: url('https://castleagegame1-a.akamaihd.net/graphics/demi_quest_back.jpg')  no-repeat top left;
	width:740px;
	height:203px;
	overflow:hidden;
}

.quests_background_special
{
	background: url('https://castleagegame1-a.akamaihd.net/graphics/special_job_back.jpg')  no-repeat top left;
	width:740px;
	height:203px;
	overflow:hidden;
}

.quests_background_sub{	
	background: url('https://castleagegame1-a.akamaihd.net/graphics/quest_expansion.jpg')  no-repeat top left;
	width:740px;	
	height:76px;	
	overflow:hidden;
}

.guild_news_feed_container{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/guild_main_chat_middle.jpg');
	width:440px;
}
	
.results {
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/bg_main_middle.jpg');
	border: 1px solid #701919; 
	padding: 5px;
}

.result_publish{
	margin-bottom:10px;
	border-bottom: 1px solid #701919;
	bottom:-16px;
	
}

.results_container{
	border: 1px solid #721717; 
	padding: 5px;
	background-color:#D0B682;
	width:728px;
	margin-bottom:10px;
}

.positive {
	color: #003b03;
	font-weight: bold;
}

.negative {
	color: #4d0000;
	font-weight: bold;
}

.mainTableDivHero
{
	overflow: auto;
	padding: 0 0 0 0px;
}

.game
{
	font-family:verdana,tahoma,arial,sans-serif;
	background: black;
	color: #4B3715;
	width:760px;overflow:hidden;
}

 a,
 a:link,
 a:visited
{
	text-decoration: none;
	font-size:14px;
	color:#214380;
}

 a:hover
{
    text-decoration: underline;
}


div.div_a_white a,
div.div_a_white a:visited,
div.div_a_white a:link
{
	font-size:18px;
	color: #ffffff;
}





.news
{
	border: 0px;
	text-align:left;
}

#change_name {
	background-color: transparent;
	color: #4B3715;
}

.line
{
}

tr.header th
{
	font-size: 18px;
}
table .header
{
	padding: 30px;

}

.intro_text
{
	width: 673px;
	text-align: left;
	color:#000000;
}

.gold
{
	color: #2a1900;
}

.levelUpItems, .levelUpItems a {
    color: #fc2018;
}

td {
	font-size: 14px;
}

.introHeroSelector
{
	padding: 10px 0px 10px 0px;
}

.introHero
{
	background-color: #5e849b;
	width:170px;
	height:170px;
}

.introHeroRev
{
	width:170px;
	height:170px;
}

.introHeroImg
{
	width:160px;
	height:160px;
}

.introHeroImgRev
{
	width:160px;
	height:160px;
	padding: 5px 5px 5px 5px;
}

.introHeroChoose 
{
	text-align:center;
	padding-top:10px;
}

 
.indexRightCol
{
	float: right;
	width: 330px;
	padding-left:0;
}

#indexNewFeatures
{
	border: 0px; 
	margin: 0;
	padding: 40px 3px 3px 3px;
}
#battleUpdateBox
{
	border: 0px; 
	background: url('https://castleagegame1-a.akamaihd.net/graphics/battle_back.jpg') no-repeat top left;
	margin: 0 0 0px 0;
	text-align: center;
	width: 332px;
	height: 527px;
	overflow:hidden;
}
#indexQuestPartsBox
{	
	border: 0px; 
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/quest_back.gif');
	margin: 0 0 0px 0;
	text-align: center;
	width: 332px;
	height: 208px;
	overflow:hidden;
}
#equippedGeneralContainer
{	
	margin: 0 0 0 0;
	text-align: center;
	width: 147px;
	height: 179px;
	overflow:hidden;
	float:right;
	padding:4px 0px 0 0;
}
#indexOracleItemSection 
{
	margin: 0 0 0 0;
	text-align: center;
	width: 100%;
}

#arena_rank_banner {
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/perd_rewards_top.jpg');
	height:460px;
	width:680px;
	background-repeat:none;
}

#arena_intro_banner {
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/perd_intropage_top.jpg');
	height:477px;
	width:680px;
	background-repeat:no-repeat;
}

#arena_banner {
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/perd_home_top.jpg');
	height:348px;
	width:680px;
	background-repeat:no-repeat;
}

#arena_body {
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/arena_back_2.jpg');
	min-height:212px;
	width:740px;
}

#arena_footer {
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/arena_back_3.jpg');
	min-height:70px;
	width:740px;
}

#army_feed_header {
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/newsfeed_b_top.jpg');
	height:80px;
	width:740px;
}

#army_feed_body {
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/newsfeed_b_middle.jpg');
	min-height:212px;
	width:740px;
}

#choose_class_header {
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/newsfeed_b_top2.jpg');
	height:13px;
	width:740px;
}

#army_feed_footer {
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/newsfeed_b_bottom.jpg');
	background-position: left bottom;
	min-height:70px;
	width:740px;
}
	
#choose_class_screen {
	background-repeat:repeat-y;
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/newsfeed_b_middle.jpg');
}




.clrDv
{
	clear:both;
}

div.statsTitle
{
    color: #000000;
    width: 740px;
    text-align:center;
    font-size: 20px;
    margin: 20px 0 20px 0;
    border-bottom: 2px solid #000000;
}

div.statsT1
{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/statsTopBorder.jpg');
	width:719px;
	height:9px;
	overflow:hidden;
}

div.statsT2
{
}

div.statsT3
{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/statsBorderBottom.jpg');
	width:719px;
	height:11px;
	overflow:hidden;
}

.statsTTitle
{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/statsBack2.jpg');
	width:686px;
	height:29px;
	overflow:hidden;
}

.statsTTitle_inc
{
	padding-left:21px;
	padding-top:7px;
	font-family:Times News Roman;
	text-decoration:underline;
	font-weight:bold;
	font-size:15px;
	text-align:left;
	color:#000000;
}

.statsTMain
{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/statsBack1.jpg');
	color:#000000;
	text-align:center;
	padding-top:10px;
	padding-left:26px;
	width:660px;
}

.dragon_health
{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/monster_health_background.jpg'); 
	background-repeat:repeat-x;
}

.statsTB
{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/statsBack3.jpg');
}

.statsTBRow
{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/statsBack1.jpg');
	color:#000000;
	padding-top:10px;
	padding-bottom:25px;
	width:660px;
}

.statsTMainback
{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/statsBack1.jpg');
}

.alchemyBanner
{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/alchemy_banner.jpg');
	color:#000000;
	text-align:center;
	padding-top:10px;
	padding-left:26px;
	width:660px;
}

.alchemyRecipeBack, .alchemyQuestBack, .alchemyRecipeBackClass
{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/alchemy_recipe.jpg');
	width:686px;
	height:180px;
	display:none;
}

.alchemyRecipeBack_inc, .alchemyQuestBack_inc
{
	color:#000000;
    padding: 10px 6px 0 20px;
}

.alchemyRecipeBackMonster
{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/alchemy_recipe_dragon.jpg');
	width:686px;
	height:180px;
	display:none;
}

.alchemyRecipeBackMonster_inc
{
	color:#000000;
    padding: 10px 6px 0 20px;
}

.extra_gift {
	display:none;
}

.show_extra .extra_gift {
	display: block;
}

.show_extra .show_extra_link{
	display: none;
}

.show_extra_link{
	text-align: right;
	padding: 10px 50px 5px 0;
}

.recipeImgContainer{
	width:75px;
	height:75px;
}
.recipeImgContainer.missing{
	background-color:black;
}

.recipeMonsterImgContainer{
	width:60px;
	height:60px;
}
.recipeMonsterImgContainer.missing{
	background-color:black;
}

.recipeImgContainer img
{
	width:75px;
}

.recipeImgContainer.missing img, .recipeMonsterImgContainer.missing img
{
	opacity:0.4;
	filter:alpha(opacity=40);
}

.recipeTitle{
	border-bottom-width:1px;
	border-bottom-style:solid;
	border-color:#a0713b;
	margin: 1em 1em 1em 0;
	font-weight:600;
}

.statsTLBorder
{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/statsBorderLeft.jpg');
}

.statsTRBorder
{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/statsBorderRight.jpg');
	background-position:top right; 
}

.dragonContainer{
	background-color:black;
}

.dragonContainer, dragonContainer table, dragonContainer td
{
  width:698px;	
}

.statUnit
{
	float:left;
	overflow:visible;
	padding:2px;
}

.ingredientUnit
{
	float:left;
	overflow:visible;
	padding:2px 2px 5px 2px;
	text-align:center;
	width:75px;
	
}

/* main container - generic container */

	

div.mContT1
{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/mcont_top.jpg');
	width:740px;
	height:12px;
	overflow:hidden;
}

div.mContT2
{
}

div.mContT3
{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/mcont_bottom.jpg');
	width:740px;
	height:12px;
	overflow:hidden;
}

.mContTMainback
{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/mcont_tile.gif');
	color:#000000;
	text-align:center;
	padding-top:10px;
	padding-left:26px;
	width:716px;
}

.mContTLBorder
{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/mcont_left.jpg');
}

.mContTRBorder
{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/mcont_right.jpg');
}

.oracleItemSmallBoxGeneral 
{
	border: 0px;
	margin: 0; 
	padding: 0 0 0 0;	
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/special_edition_back_unit2.jpg');
	width: 400px;
	height: 450px;		
	overflow:hidden;
}

.oracleItemSmallBoxUnit
{
	border: 0px;
	margin: 0; 
	padding: 0 0 0 0;	
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/special_edition_back_unit2.jpg');
	width: 400px;
	height: 450px;		
	overflow:hidden;
}	

.demiBox
{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/choose_demi_back.jpg');
	width:330px;
	height:104px;
}

.attdeftext
{
	margin:0 0 0 60px;
	font-family:Times New Roman;
	font-size:13pt;
	height:34px;
	color:#78431e;
	font-weight:bold;
}

.se_req_text
{
	margin:0 0 0 30px;
	font-family:Times New Roman;
	font-size:10pt;
	height:27px;
	font-weight:bold;
}

div.alertsContainer
{
	overflow: auto;
	padding: 9px 9px 18px 9px;
	margin:0px;
	max-height: 1200px;
	text-align:left;
}

div.alert_title
{
	font-size: 10px;
	font-weight: 700;
}


.special_edition_title
{
	margin:0 0 0 0;
	font-family:Times New Roman;
	font-size:18px;
	height:37px;
	color:#265988;
	font-weight:bold;
	text-align:center;
	margin-left:19px;
	width:156px;
	overflow:hidden;
}

.se_desc
{
	margin:0 0 0 0;
	font-family:Times New Roman;
	height:70px;
	text-align:left;
	width:345px;
	color:#000000;
}

.hover_header
{
	color:#55a5ff;
}

.hover_header:hover
{
	color:White;
}


.request_form   {
	width: 431px;
	margin:0 auto;
}
div.attributeFrame
{
	color:#000000;
}

table.keepTable1
{
	font-family:Times New Roman;
}
table.keepTable1Other
{
	margin: 13px 0 0 0px;
	width: 377px;
	margin-left:auto;
	margin-right:auto;
	padding-top:10px;
	padding-right:10px;
	padding-left:10px;
	padding-bottom:10px;
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/profile_stat_back.jpg');
}

table.keepTable1 td
{
	font-size:13px;
	color: #000000;
}

table.keepTable1Other td
{
        font-size:12px;
        color: #000000;
}

/* oracle page css */

div.offersDiv
{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/oracle2.jpg');
	height:332px;
	width:730px;
}

div.limitedDivWrapper
{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/oracle_back_four.jpg');
	width:730px;
	height:402px;
	margin: 0 0 0 5px;
}

div.limitedDivWrapperPadding
{
	padding: 20px 0px 0px 40px;
}

div.limitedDiv
{
	width: 164px;
	height: 350px;
	float:left;
}

div.limitedDiv_int
{
	padding: 0 4px 0 0;
}

/* */

/* BOOKMARK MODULE */
div.bookmarkModule
{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/bookmark_main_thanks.jpg');
	width: 330px;
	height: 58px;	
}

/* TWITTER MODULE */
div.twitterFeed
{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/home_gift_back.jpg');
	width: 330px;
	height: 58px;	
}

/* Facebook Invite Classes */

/* OLD REQUEST FORM CSS
.unselected_list, .selected_list, .toomany_selected    {
	color: white !important;
	background-color: #000000;
}

.inputtext {
	color: #3B5998 !important;
	background-color: #000000;
}

.request_form_submit    {
	margin-left: 100px;
	width: 240px;
}

.single_request .request_form_submit {
	margin-left:0px;
    width:150px;
}

.interaction_form_submit {
	width: 90px !important;
	margin-left:135px !important;
}

.condensed_multi_friend_selector span {
	color: white !important;
}
*/
.unselected_list, .selected_list, .toomany_selected    {
	color: #000000 !important;
	background-color: #ffffff;
}

.inputtext {
	color: #3B5998 !important;
	background-color: #ffffff;
}

.request_form_submit    {
	margin-left: 100px;
	width: 240px;
}

.single_request .request_form_submit {
	margin-left:0px;
    width:150px;
}

.interaction_form_submit {
	width: 90px !important;
	margin-left:135px !important;
}

.condensed_multi_friend_selector span {
	color: #000000 !important;
}


/* Quest Land Stages */
.qbtext
{
	float:left;
	width:125px;
	height:33px;
	margin-top:10px;
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/qbtext.gif');
	background-repeat: no-repeat;
}

.qbTB
{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/qbback.jpg');
}

.qbTB2
{
	background-position: 0px -111px;
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/qbback.jpg');
}

.qbTLBorder
{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/qb_left.gif');
}

.qbTRBorder
{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/qb_right.gif');
}
div.qbT1
{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/qb_top.gif');
	width:740px;
	height:8px;
	overflow:hidden;
}
div.qbT3
{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/qb_bottom.gif');
	width:740px;
	height:8px;
	overflow:hidden;
	margin-bottom:10px;
}

div.title_tab
{
	float: left;
	width: 100px;
	height: 60px;
	
	text-decoration: none;
	text-align: center;
	vertical-align: middle;
	display: block;
	overflow: hidden;
	font-size: 12px;
	
	border: none;
	margin-top: 12px;
}

div.title_tab:hover
{
}

div.title_tab_selected
{
	clear: none;
	float: left;
	width: 130px;
	height: 73px;
	
	color: #fff;
	text-decoration: none;
	text-align: center;
	vertical-align: middle;
	display: block;
	overflow: hidden;
	font-size: 12px;
			
	background-color: transparent;           
    background-image: none;                  
	
	border-bottom: none;
	
	margin: 0 0 0 0;
	padding: 0;
}

div.title_tab_selected:hover
{
	
}

div.tab_body
{
	margin: 0;
	padding: 0;	
}

div.title_tab a:hover, div.title_tab_selected a:hover
{
	text-decoration: none;	
}

/* QUESTS PAGE */
table.quests_layout
{
	width: 740px;
	margin: 0px;
	padding: 0px;
	background-repeat:no-repeat;
}

table.quests_layout tr th
{
	padding: 6px;
	margin: 0;
	
	font-size: 90%;
	font-weight: bold;
	text-align: left;
}

table.quests_layout td
{
	padding: 0;
	margin: 0;
	
	font-size: 90%;
	text-align: left;
}

.quest_img
{
	width:280px;
	height:184px;
	overflow:hidden;
	float:left;
}

.quest_img_cont
{
	margin:14px 0 0 25px;	
	width:245px;
	height:101px;
	overflow:hidden;
}

.quest_act_gen
{
	margin:23px 0 0 10px;
	width:78px;
	height:78px;
	float:left;
}

.quest_land_back
{
	margin:23px 0 0 4px;
	width:151px;
	height:78px;
	float:left;
}

.quest_progress
{
	margin:14px 0 0 25px;
	width:237px;
}

.quest_progress_bar
{
	margin:0px 0 0 9px;
}

.quest_desc
{
	width:444px;
	overflow:hidden;
	padding:14px 0 0 8px;
	float:left;
}

.qd_1
{
	width:425px;
	height:74px;
	color:Black;
	overflow:hidden;
}

.qd_2
{
	height:19px;
	padding:2px 0 0 60px;
	color:#187930;
	overflow:hidden;
}

.qd_3
{
	width:434px;
	height:80px;
	color:Black;
}


.quest_sub_img
{
	width:255px;
	padding: 17px 0 0 25px;
	float:left;
}

.quest_sub_title
{
	width:250px;
	height:17px;
	text-align:center;
	color: #7496bd;
	overflow:hidden;
}

.quest_sub_progress
{
	padding:2px 0 0 9px;
	width:237px;
	height:20px;
}

.quest_sub_desc
{
	width:318px;
	overflow:hidden;
	padding:19px 0 0 13px;
	float:left;
}

.qd_2_sub
{
	width:240px;
	height:19px;
	color:#187930;
	overflow:hidden;
}

.qd_3_sub
{
	width:300px;
	height:20px;
	color:Black;
}

.quest_req_sub
{
	width:300px;
	height:20px;	
	float:left;
}

.quest_start_sub
{
	width:112px;
	height:44px;
	float:left;
}

.quest_req
{
	width:318px;
	height:78px;	
	float:left;
}

.quest_start
{
	padding:5px 0 0 0;
	width:112px;
	height:70px;
	float:left;
}

.hero_select_stats
{
	float:left;
	height:74px;
	width:230px;
	overflow:hidden;
	color:#78431E;
	font-family:Georgia;
	font-weight:bold;
}

.generalContainerBox
{
	border: 0;
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/model_top.jpg');
	margin: 0;
	padding: 0;	
	background-repeat:no-repeat;
	width: 740px;
	height: 267px;
}

.equippedGeneralCnt2
{
	border: 0px;
	margin: 0;
	padding: 8px 0 0 8px;
	text-decoration: none;
}

#equippedGeneralName
{
	height:17px;
	text-align:left;
	font-weight:bold;
	overflow:hidden;
	padding: 0px 0 0 25px;
}


#general_pic
{
	float:left;
	width:244px;
	height:263px;
	overflow:hidden;
}

#general_pic_internal
{
	overflow:hidden;
	padding:43px 0 0 54px;
}

#general_name_div2
{
	width:455px;
	height:76px;
}

#general_name_div2_int
{
	color:#000000;
	padding:10px 0 0 25px;
}

#general_name_div
{
	width:374px;
	overflow:hidden;
}

#general_name_div_int
{
	font-weight:bold;
	font-size:23px;
	color:#ffffff;
	overflow:hidden;
	padding:2px 0 0 24px;
}

/* GENERALS PAGE */
#generalContainerBox2 
{	
	float: left;
	width: 740px; 
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/model_middle.jpg');
	background-repeat:repeat-y;
}

#generalContainerBox2Padding 
{		
	padding: 5px 0 0 50px;

}

#generalContainerBox2 .generalHelp {
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/silver_bar.jpg');
	margin:5px 0 10px 0;
	color:white;
	height:58px;
	background-repeat:no-repeat;
}

#generalContainerBox2 .generalHelp_int {
	padding:18px 0 0 150px;
	color:white;
}

#generalTitle
{
	font-size: large;
	padding: 0 0 10px 0;
	text-align: left;
}
.generalHero
{
	margin: 0 2px 2px 2px;
	float: left;
	text-align: center;
}

.activeCooldownGeneralSmallContainer
{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/power_bar_header_bg.gif');
	background-repeat: no-repeat;
	border: 0;
	float: left; 
	margin: 0;
	text-align: center;
	width: 120px;
	height:231px;
	margin-right:14.5px;
	color:white;
	overflow:hidden;
}

.generalSmallContainer1
{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/model_bg2.gif');
	background-repeat: no-repeat;
	border: 0;
	float: left; 
	margin: 0;
	text-align: center;
	width: 120px;
	height:231px;
	margin-right:14.5px;
	overflow:hidden;
}

.generalSmallContainer2
{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/gen_plate.gif');
	background-repeat: no-repeat;
	border: 0;
	float: left; 
	margin: 0;
	text-align: center;
	width:136px;
	height:262px;
	margin-right:5px;
	overflow:hidden;
}

.generalSmallContainer
{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/model_bg.gif');
	background-repeat: no-repeat;
	border: 0;
	float: left; 
	margin: 0;
	text-align: center;
	width: 120px;
	height:175px;
	margin-right:14.5px;
	overflow:hidden;
	color:#FFD200;
}

.selfSmallContainer
{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/war_bg_self.jpg');
	background-repeat: no-repeat;
	border: 0;
	float: left; 
	margin: 0;
	text-align: center;
	width: 120px;
	height:175px;
	margin-right:14.5px;
	overflow:hidden;
	color:gray;
}

.battle_results .full_invade_results, .battle_results .mini_invade_results 
{
	display:none;
}

.battle_results.show_full .full_invade_results, .battle_results.show_mini .mini_invade_results 
{
	display:block;
}

.generalDuelContainer
{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/duel_back.jpg');
	background-repeat: no-repeat;
	border: 0;
	margin: 0;
	text-align: center;
	width: 184px;
	height:246px;
	overflow:hidden;
}

.general_duel_div3
{
	padding: 6px 0 11px;
	font-size:16px;
	color: #FFD200;	
}

.generals_duel_stats
{
	color:#FFD200;
	font-weight:bold;
	font-size:14px;
	height:30px;
	width:184px;
	padding-top: 2px;
}

.generalPageFooter
{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/model_bottom.jpg');
	background-repeat: no-repeat;
	width:740px;
	height:10px;
}

.general_pic_div3
{
	padding:0 0 0 0;
	height:122px;
}

.general_name_div3
{
	height:25px;	
}

.general_name_div3_padding
{
	padding: 4px 0px 6px 0px;
	font-size:12px;
	color: #FFD200;	
}

.generals_indv_stats
{
	height:25px;
	width:120px;
}

.generals_indv_stats_padding
{
	color:#FFD200;
	font-weight:bold;
	font-size:12px;
	padding-top: 2px;
}

/* Popups */

div.hiddenPopupTop
{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/statsTopBorder.jpg');
	width:500px;
	height:9px;
	overflow:hidden;
}

.hiddenPopupContent
{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/statsBack1.jpg');
	width:468px;
}

.hiddenPopupTableLeft
{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/statsBorderLeft.jpg');
	width: 16px;
}

.hiddenPopupTableRight
{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/statsBorderRight.jpg');
	width: 16px;
}

div.hiddenPopupBottom
{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/statsBorderBottom.jpg');
	width:500px;
	height:9px;
	overflow:hidden;
}

div.my_fan_box{
	overflow: hidden; 
	height: 70px; 
	background-color:white;
	width: 300px;
	position:absolute;
	top:300px;
	left:250px;
	z-index:30;
}

div.castlepb_bg
{
	
	display:none;
	position:absolute;
	background-color:black;
	filter:alpha(opacity=75);
	-moz-opacity:.75;
	opacity: 0.75; 
	vertical-align:top; 
	top:0; 
	left:0;
	z-index:2;
	height: 10000px;
	width: 945px;
}

div.connect_castlepb_bg
{
	
	display:none;
	position:absolute;
	background-color:black;
	filter:alpha(opacity=75);
	-moz-opacity:.75;
	opacity: 0.75; 
	vertical-align:top; 
	top:0; 
	left:0;
	z-index:1005;
	height: 3000px;
	width: 100%;
}

div.plain_castlepb
{
	display:none;
	position:absolute;
	background-color: #000000;
	color: #ffffff;
	top: 150px;
	left: 125px;
	width: 500px;
	z-index:30;
	text-align: left;
}

div.plain_castlepb_button
{
	display: block;
	position:absolute;
	right:7px;
	top:6px;
	width:20px;
	height:20px;
	padding: 0;
	margin: 0;
}

div.castlepb
{
	display:none;
	position:absolute;
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/statsBack1.jpg');
	top: 150px;
	left: 125px;
	width: 500px;
	z-index:30;
	text-align: left;
}

div.castlepb2
{
	position:absolute;
	z-index:1006;
	text-align: left;
}

div.castlepb3
{
	position:absolute;
	z-index:30;
	text-align: left;
}

div.castlepb_refresh
{
	position:absolute;
	z-index:30;
	text-align: left;
}

div.noclass
{
}

div.castlepb_button
{
	display: block;
	position:absolute;
	right:16px;
	top:9px;
	width:21px;
	height:21px;
	padding: 0;
	margin: 0;
}

div.castlepb_title
{
	background-image: url('https://castleagegame1-a.akamaihd.net/graphics/statsBack2.jpg');	
	float:left;
	padding: 10px 0 5px 5px;
	width: 463px;	
	font-size: 18px;
	font-weight: bold;
	color: #000;
}

div.castlepb_body
{
	
	float:left;
	padding: 15px 0 0 5px;
	clear: left;

	font-size: 14px;
	font-weight: normal;
	
	color: #000;
	width: 463px;
}

div.castlepb_body td
{
	font-size: 14px;
}


/*******************************************
* Popup css classes for Demi Popup Table
********************************************/

div.demipb_bg
{
	position:absolute;
	background-color:black;
	filter:alpha(opacity=50);
	-moz-opacity:.50;
	opacity: 0.5; 
	vertical-align:top; 
	top:0; 
	left:0;
	z-index:2;
	height: 3000px;
	width: 945px;
}

div.demipb
{
	font-family:Times New Roman;
	font-size:16px;
	position:absolute;
	background-color: #806b58;
	top: 150px;
	left: 140px;
	width: 480px;
	z-index:30;
	text-align: left;
}

div.demipb_button
{
	position:absolute;
	right:5px;
	top:5px;
	width:21px;
	height:21px;
	padding: 0;
	margin: 0;
}

div.demipb_button a, div#demipb_button a:visited
{
	border: none;
	text-decoration: none;
}

div.demipb_title
{
	background-color: #806b58;	
	float:left;
	padding: 5px 0 5px 10px;
	width: 470px;	
	font-size: 14px;
	font-weight: bold;
	color: #000;
}

div.demipb_title_image
{
	background-color: #806b58;	
	float:left;
	padding: 0px 0 0px 0;
	width: 480px;	
	font-size: 18px;
	font-weight: bold;
	color: #000;
}

div.demipb_body
{	
	background-color:#806b58;
	float:left;
	padding: 10px 0 0 0px;
	clear: left;

	font-size: 14px;
	font-weight: normal;
	
	color: #000;
	width: 480px;
}

div.demipb_body td
{
	font-size: 14px;
}


div.title_left{
	width: 660px;
	text-align:center;
	padding: 10px 0 10px 0;
}

.raid_invade_button, .raid_duel_button
{
	display:none;
}

.show_invade .raid_invade_button, .show_duel .raid_duel_button
{
	display:block;
}

.UIActionButton
{
	margin:5px;	
}

#guild_bg_top{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guild_main_top_bg.jpg'); 
	height:24px; 
	width:740px;
}

#guild_bg{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guild_main_middle_bg.jpg'); 
	width:740px;
}

#guild_bg_bottom{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guild_main_bottom_bg.jpg');
	height:24px; 
	width:740px;
}

#guild_battle_banner_section{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guild_battle_banner.jpg'); 
	width:680px; 
	height:380px;
}

#arena_battle_banner_section{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/perd_battle_top.jpg'); 
	width:680px; 
	height:239px;
}

#guild_battle_health{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guild_power_bars.jpg'); 
	height:96px; 
	width:680px;
}

#guild_battle_section.show_your #your_guild_tab{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/your_guild_on.gif');
}

#guild_battle_section.show_enemy #enemy_guild_tab{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/enemy_guild_on.gif');
}

#guild_battle_section.show_log #log_tab{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/log_guild_on.gif');
}

#log_tab{
	float:left; 
	width:226px; 
	height:60px; 
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/log_guild_off.gif');
	cursor:pointer;
}

#your_guild_tab{
	float:left; 
	width:227px; 
	height:60px; 
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/your_guild_off.gif');
	cursor:pointer;
} 

#enemy_guild_tab{
	float:left; 
	width:227px; 
	height:60px; 
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/enemy_guild_off.gif');
	cursor:pointer;
}

#your_team_tab{
	float:left; 
	width:227px; 
	height:60px; 
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/your_team_off.gif');
	cursor:pointer;
}

#enemy_team_tab{
	float:left; 
	width:227px; 
	height:60px; 
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/enemy_team_off.gif');
	cursor:pointer;
}

#guild_battle_section.show_your #your_team_tab{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/your_team_on.gif');
}

#guild_battle_section.show_enemy #enemy_team_tab{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/enemy_team_on.gif');
}

.show_your #your_guild_battle_section_battle_list, .show_enemy #enemy_guild_battle_section_battle_list, .show_log #guild_battle_section_log_list{
	display:block;
}

#your_guild_battle_section_battle_list, #enemy_guild_battle_section_battle_list, #guild_battle_section_log_list{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guild_battle_black_bg.jpg'); 
	width:660px; 
	padding: 10px 2px 10px 18px;
	display:none;
}

#arena_rank_reward_list{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guild_battle_black_bg.jpg'); 
	width:652px; 
	padding: 10px 10px 10px 18px;
}

.show_1 #your_guild_tab_1, .show_1 #enemy_guild_tab_1, .show_1 #log_tab_1,
.show_2 #your_guild_tab_2, .show_2 #enemy_guild_tab_2, .show_2 #log_tab_2,
.show_3 #your_guild_tab_3, .show_3 #enemy_guild_tab_3, .show_3 #log_tab_3,
.show_4 #your_guild_tab_4, .show_4 #enemy_guild_tab_4 {
    background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guild_gate_tab_on.jpg');
}

.show_1 #your_arena_tab_1, .show_1 #enemy_arena_tab_1, .show_1 #arena_log_tab_1,
.show_2 #your_arena_tab_2, .show_2 #enemy_arena_tab_2, .show_2 #arena_log_tab_2,
.show_3 #your_arena_tab_3, .show_3 #enemy_arena_tab_3, .show_3 #arena_log_tab_3,
.show_4 #your_arena_tab_4, .show_4 #enemy_arena_tab_4 {
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/arena3_gate_tab_on.jpg');
}

#your_guild_member_list_1, #enemy_guild_member_list_1, #log_member_list_1,
#your_guild_member_list_2, #enemy_guild_member_list_2, #log_member_list_2,
#your_guild_member_list_3, #enemy_guild_member_list_3, #log_member_list_3,
#your_guild_member_list_4, #enemy_guild_member_list_4{
	display:none;
}

.show_1 #your_guild_member_list_1, .show_1 #enemy_guild_member_list_1, .show_1 #log_member_list_1,
.show_2 #your_guild_member_list_2, .show_2 #enemy_guild_member_list_2, .show_2 #log_member_list_2,
.show_3 #your_guild_member_list_3, .show_3 #enemy_guild_member_list_3, .show_3 #log_member_list_3,
.show_4 #your_guild_member_list_4, .show_4 #enemy_guild_member_list_4{
	display:block;
}

#your_guild_tab_1, #enemy_guild_tab_1, #log_tab_1,
#your_guild_tab_2, #enemy_guild_tab_2, #log_tab_2,
#your_guild_tab_3, #enemy_guild_tab_3, #log_tab_3,
#your_guild_tab_4, #enemy_guild_tab_4 {
    float:left;
    width:160px;
    height:60px;
    background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guild_gate_tab_off.jpg');
    cursor:pointer;
}

#your_new_guild_tab_1, #enemy_new_guild_tab_1, #new_log_tab_1,
#your_new_guild_tab_2, #enemy_new_guild_tab_2, #new_log_tab_2,
#your_new_guild_tab_3, #enemy_new_guild_tab_3, #new_log_tab_3,
#your_new_guild_tab_4, #enemy_new_guild_tab_4 {
	float:left; 
	width:160px; 
	height:60px; 
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/gate_tab_new2_off.jpg');
	cursor:pointer;
    color: #CCCCCC;
}

.show_1 #your_new_guild_tab_1, .show_1 #enemy_new_guild_tab_1, .show_1 #new_log_tab_1,
.show_2 #your_new_guild_tab_2, .show_2 #enemy_new_guild_tab_2, .show_2 #new_log_tab_2,
.show_3 #your_new_guild_tab_3, .show_3 #enemy_new_guild_tab_3, .show_3 #new_log_tab_3,
.show_4 #your_new_guild_tab_4, .show_4 #enemy_new_guild_tab_4 {
    background-image:url('https://castleagegame1-a.akamaihd.net/graphics/gate_tab_new3.jpg');
    color: #FFFFFF;
}

#your_arena_tab_1, #enemy_arena_tab_1, #arena_log_tab_1, 
#your_arena_tab_2, #enemy_arena_tab_2, #arena_log_tab_2,
#your_arena_tab_3, #enemy_arena_tab_3, #arena_log_tab_3,
#your_arena_tab_4, #enemy_arena_tab_4 {
	float:left; 
	width:160px; 
	height:60px; 
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/arena3_gate_tab_off.jpg');
	cursor:pointer;
}

#your_guild_member_list, #enemy_guild_member_list{
    width:640px;
    min-height:60px;
    background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guild_monster/guild_battle_bg.jpg');

}

#your_new_guild_member_list, #enemy_new_guild_member_list{
	width:640px; 
	min-height:60px; 
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guildbackground_3.jpg');
	
}

#your_guild_member_list.arena, #enemy_guild_member_list.arena{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/arena_background_mid.jpg');	
}

#log_member_list{
	width:640px; 
	min-height:60px; 
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guild_battle_bg_2.jpg');
}

#log_member_list2{
    width:640px;
    min-height:60px;
    background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guildbackground_3.jpg');
}

.spider .show_1 #enemy_guild_tab_1{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guild_monster/spider_guildmonster_topbar.jpg');
}
.spider .show_2 #enemy_guild_tab_2 {
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guild_monster/spider_guildmonster_topbar.jpg');
}
.spider .show_3 #enemy_guild_tab_3 {
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guild_monster/spider_guildmonster_topbar.jpg');
}
.spider .show_4 #enemy_guild_tab_4 {
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guild_monster/spider_guildmonster_topbar.jpg');
}
	
.spider #enemy_guild_tab_1 {
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guild_monster/spider_guildmonster_topbar.jpg');
}
.spider #enemy_guild_tab_2 {
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guild_monster/spider_guildmonster_topbar.jpg');
}
.spider #enemy_guild_tab_3 {
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guild_monster/spider_guildmonster_topbar.jpg');
}
.spider #enemy_guild_tab_4 {
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guild_monster/spider_guildmonster_topbar.jpg');
}
				
.spider .show_1 #enemy_guild_member_list {
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guild_monster/spider_guildmonster_middle.jpg');
}
		
.spider .show_2 #enemy_guild_member_list {
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guild_monster/spider_guildmonster_middle.jpg');
}
		
.spider .show_3 #enemy_guild_member_list {
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guild_monster/spider_guildmonster_middle.jpg');
}
.spider .show_4 #enemy_guild_member_list {
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guild_monster/spider_guildmonster_middle.jpg');
}

.ca_girls .show_1 #enemy_guild_tab_1{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guild_monster/ladies_nature_topbar.jpg');
}
.ca_girls .show_2 #enemy_guild_tab_2 {
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guild_monster/ladies_demon_topbar.jpg');
}
.ca_girls .show_3 #enemy_guild_tab_3 {
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guild_monster/ladies_undead_topbar.jpg');
}
.ca_girls .show_4 #enemy_guild_tab_4 {
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guild_monster/ladies_angel_topbar.jpg');
}
	
.ca_girls #enemy_guild_tab_1 {
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guild_monster/ladies_nature_topbar_dark.jpg');
}
.ca_girls #enemy_guild_tab_2 {
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guild_monster/ladies_demon_topbar_dark.jpg');
}
.ca_girls #enemy_guild_tab_3 {
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guild_monster/ladies_undead_topbar_dark.jpg');
}
.ca_girls #enemy_guild_tab_4 {
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guild_monster/ladies_angel_topbar_dark.jpg');
}
				
.ca_girls .show_1 #enemy_guild_member_list {
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guild_monster/ladies_nature_backgroundbar.jpg');
}
		
.ca_girls .show_2 #enemy_guild_member_list {
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guild_monster/ladies_demon_backgroundbar.jpg');
}
		
.ca_girls .show_3 #enemy_guild_member_list {
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guild_monster/ladies_undead_backgroundbar.jpg');
}
		
.ca_girls .show_4 #enemy_guild_member_list {
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guild_monster/ladies_angel_backgroundbar.jpg');
}

.alpha_vincent .show_1 #enemy_guild_tab_1, .alpha_vincent .show_2 #enemy_guild_tab_2, .alpha_vincent .show_3 #enemy_guild_tab_3, .alpha_vincent .show_4 #enemy_guild_tab_4,
.vincent .show_1 #enemy_guild_tab_1, .vincent .show_2 #enemy_guild_tab_2, .vincent .show_3 #enemy_guild_tab_3, .vincent .show_4 #enemy_guild_tab_4 {
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/alpha_vincent_guild_gate_tab_on.jpg');
}
		
.alpha_vincent #enemy_guild_tab_1,  .alpha_vincent #enemy_guild_tab_2,  .alpha_vincent #enemy_guild_tab_3, .alpha_vincent #enemy_guild_tab_4,
.vincent #enemy_guild_tab_1,  .vincent #enemy_guild_tab_2,  .vincent #enemy_guild_tab_3, .vincent #enemy_guild_tab_4 {
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/alpha_vincent_guild_gate_tab_off.jpg');
}
		
.alpha_vincent #enemy_guild_member_list,.vincent #enemy_guild_member_list{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guild_monster/alpha_vincent_backgroundbar.jpg');
}

.new_request_tab_type {
	color:white; 
	text-align:center; 
	font-size:11px; 
	padding-top:3px; 
	float:left; 
	height:20px;
	width:100px; 
	margin-right:3px; 
	cursor:pointer; 
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/newrequest_topnav.gif');
}

.new_request_tab_type.selected {
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/newrequest_topnav_selected.gif');
}

#newbieMenu{
		width:650px;
		height:30px;
		display:block;
		border:none;
		border:0px;
		margin:0px;
		padding:0px;
		font-size:14px;
		font: 67.5%;
		font-family: Verdana, Helvetica, sans-serif;
		z-index:1000;
		}
		.newbieMenu ul{
			list-style:none;
			margin:0;
			padding:0;
			z-index:1001;
			}
			.newbieMenu li{
				position:relative;
				float:left;
				height:30px;
			}
			.newbieMenu li a{
				display:block;
				padding:0 0 6px 10px;
				margin:0 5px 0 0;
				height:37px;
				width:119px;
			}
				.newbieMenu li a#newbie_menu_quest {
					background-image:url('https://castleagegame1-a.akamaihd.net/graphics/new_menu_quest.gif');
					background-repeat:no-repeat;
				}
				
				.newbieMenu li a#newbie_menu_quest:hover, .newbieMenu ul li:hover a#newbie_menu_quest{
					background-image:url('https://castleagegame1-a.akamaihd.net/graphics/new_menu_quest_on.gif');
					background-repeat:no-repeat;
				}
				
				.newbieMenu li a#newbie_menu_quest_locked {
					background-image:url('https://castleagegame1-a.akamaihd.net/graphics/new_menu_questlocked.gif');
					background-repeat:no-repeat;
				}
				
				.newbieMenu li a#newbie_menu_quest_locked:hover, .newbieMenu ul li:hover a#newbie_menu_quest_locked{
					background-image:url('https://castleagegame1-a.akamaihd.net/graphics/new_menu_questlocked.gif');
					background-repeat:no-repeat;
				}
				.newbieMenu li a#newbie_menu_monster_locked {
					background-image:url('https://castleagegame1-a.akamaihd.net/graphics/new_menu_monsterlocked.gif');
					background-repeat:no-repeat;
				}
				.newbieMenu li a#newbie_menu_monster_locked:hover, .newbieMenu ul li:hover a#newbie_menu_monster_locked{
					background-image:url('https://castleagegame1-a.akamaihd.net/graphics/new_menu_monsterlocked.gif');
					background-repeat:no-repeat;
				}		
				.newbieMenu li a#newbie_menu_battle_locked {
					background-image:url('https://castleagegame1-a.akamaihd.net/graphics/new_menu_battlelocked.gif');
					background-repeat:no-repeat;
				}
				.newbieMenu li a#newbie_menu_battle_locked:hover, .newbieMenu ul li:hover a#newbie_menu_battle_locked{
					background-image:url('https://castleagegame1-a.akamaihd.net/graphics/new_menu_battlelocked.gif');
					background-repeat:no-repeat;
				}
				.newbieMenu li a#newbie_menu_town_locked {
					background-image:url('https://castleagegame1-a.akamaihd.net/graphics/new_menu_townlocked.gif');
					background-repeat:no-repeat;
				}
				.newbieMenu li a#newbie_menu_town_locked:hover, .newbieMenu ul li:hover a#newbie_menu_town_locked{
					background-image:url('https://castleagegame1-a.akamaihd.net/graphics/new_menu_townlocked.gif');
					background-repeat:no-repeat;
				}
				
				.newbieMenu li a#newbie_menu_equip_locked {
					background-image:url('https://castleagegame1-a.akamaihd.net/graphics/new_menu_equiplocked.gif');
					background-repeat:no-repeat;
				}
				.newbieMenu li a#newbie_menu_equip_locked:hover, .newbieMenu ul li:hover a#newbie_menu_equip_locked{
					background-image:url('https://castleagegame1-a.akamaihd.net/graphics/new_menu_equiplocked.gif');
					background-repeat:no-repeat;
				}
				

#mainMenu{
	width:650px;
	height:30px;
	display:block;
	border:none;
	border:0px;
	margin:0px;
	padding:0px;
	font-size:14px;
	font: 67.5%;
	font-family: Verdana, Helvetica, sans-serif;
	z-index:1000;
	}
.mainMenu ul{
	list-style:none;
	margin:0;
	padding:0;
	z-index:1001;
	}
	.mainMenu li{
		position:relative;
		float:left;
		height:30px;
	}
	.mainMenu li a{
		display:block;
		padding:0 0 6px 0;
		margin:0 5px 0 0;
		height:30px;
		width:72px;
	}
	
		.mainMenu li a#main_menu_home {
			background-image:url('https://castleagegame1-a.akamaihd.net/graphics/mainnav_home.gif');
			background-repeat:no-repeat;
		}
		
		.mainMenu li a#main_menu_home:hover, .mainMenu ul li:hover a#main_menu_home{
			background-image:url('https://castleagegame1-a.akamaihd.net/graphics/mainnav_home_on.gif');
			background-repeat:no-repeat;
		}
		
		.mainMenu li a#main_menu_quest {
			background-image:url('https://castleagegame1-a.akamaihd.net/graphics/mainnav_quest.gif');
			background-repeat:no-repeat;
		}
		
		.mainMenu li a#main_menu_quest:hover, .mainMenu ul li:hover a#main_menu_quest{
			background-image:url('https://castleagegame1-a.akamaihd.net/graphics/mainnav_quest_on.gif');
			background-repeat:no-repeat;
		}
		
		.mainMenu li a#main_menu_battle {
			background-image:url('https://castleagegame1-a.akamaihd.net/graphics/mainnav_battle.gif');
			background-repeat:no-repeat;
		}
		
		.mainMenu li a#main_menu_battle:hover, .mainMenu ul li:hover a#main_menu_battle{
			background-image:url('https://castleagegame1-a.akamaihd.net/graphics/mainnav_battle_on.gif');
			background-repeat:no-repeat;
		}
		
		.mainMenu li a#main_menu_monster {
			background-image:url('https://castleagegame1-a.akamaihd.net/graphics/mainnav_monster.gif');
			background-repeat:no-repeat;
		}
		
		.mainMenu li a#main_menu_monster:hover, .mainMenu ul li:hover a#main_menu_monster{
			background-image:url('https://castleagegame1-a.akamaihd.net/graphics/mainnav_monster_on.gif');
			background-repeat:no-repeat;
		}
		
		.mainMenu li a#main_menu_heroes {
			background-image:url('https://castleagegame1-a.akamaihd.net/graphics/mainnav_heroes.gif');
			background-repeat:no-repeat;
		}
		
		.mainMenu li a#main_menu_heroes:hover, .mainMenu ul li:hover a#main_menu_heroes{
			background-image:url('https://castleagegame1-a.akamaihd.net/graphics/mainnav_heroes_on.gif');
			background-repeat:no-repeat;
		}
		
		.mainMenu li a#main_menu_town {
			background-image:url('https://castleagegame1-a.akamaihd.net/graphics/mainnav_town.gif');
			background-repeat:no-repeat;
		}
		
		.mainMenu li a#main_menu_town:hover, .mainMenu ul li:hover a#main_menu_town{
			background-image:url('https://castleagegame1-a.akamaihd.net/graphics/mainnav_town_on.gif');
			background-repeat:no-repeat;
		}
		
		.mainMenu li a#main_menu_oracle {
			background-image:url('https://castleagegame1-a.akamaihd.net/graphics/mainnav_oracle.gif');
			background-repeat:no-repeat;
		}
		
		.mainMenu li a#main_menu_oracle:hover, .mainMenu ul li:hover a#main_menu_oracle{
			background-image:url('https://castleagegame1-a.akamaihd.net/graphics/mainnav_oracle_on.gif');
			background-repeat:no-repeat;
		}
		
		.mainMenu li a#main_menu_keep {
			background-image:url('https://castleagegame1-a.akamaihd.net/graphics/mainnav_keep.gif');
			background-repeat:no-repeat;
		}
		
		.mainMenu li a#main_menu_keep:hover, .mainMenu ul li:hover a#main_menu_keep{
			background-image:url('https://castleagegame1-a.akamaihd.net/graphics/mainnav_keep_on.gif');
			background-repeat:no-repeat;
		}
		
		.mainMenu li a#main_menu_guild {
			background-image:url('https://castleagegame1-a.akamaihd.net/graphics/mainnav_guild.gif');
			background-repeat:no-repeat;
		}
		
		.mainMenu li a#main_menu_guild:hover, .mainMenu ul li:hover a#main_menu_guild{
			background-image:url('https://castleagegame1-a.akamaihd.net/graphics/mainnav_guild_on.gif');
			background-repeat:no-repeat;
		}
		
		
	.mainMenu li ul{
		list-style:none;
		margin:0 0 0 -15px;
		position:absolute;
		width:100px;
		text-align:center;
		z-index:1002;
		}
	.mainMenu li ul#mainMenu_guild{
		list-style:none;
		margin:0 0 0 -21px;
		position:absolute;
		width:100px;
		text-align:center;
		z-index:1003;
		}
	.mainMenu li li {
		display:block;
		float:none;
		margin:0px;
		padding:0px;
		height:25px;
		width:100px;
		text-align:center;
		background-image:url('https://castleagegame1-a.akamaihd.net/graphics/mainnav_tab_mid.jpg');
		background-repeat:repeat-y;
		}
	.mainMenu li li a{
		display:block;
		font-size:11px;
		line-height:25px;
		width: 100px;
	}
	.mainMenu li li a:hover{
		text-decoration:none;
		display:block;
		line-height:25px;
		width:100px;
		background-image:url('https://castleagegame1-a.akamaihd.net/graphics/mainnav_tab_mid_hover.jpg');
		background-repeat:no-repeat;
		overflow:hidden;
	}
	.mainMenu li div.bottom {
		width:100px;
		height:4px;
		overflow:hidden;
		background-image:url('https://castleagegame1-a.akamaihd.net/graphics/mainnav_tab_cap.gif');
		background-repeat:no-repeat;
	}
	
.grayscale
{
	filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale"); /* Firefox 3.5+ */
    filter: gray; /* IE6-9 */
    -webkit-filter: grayscale(100%); /* Google Chrome & Webkit Nightlies */
}

.degrayscale
{
	filter: none;
	-webkit-filter: grayscale(0%);
}

.dungeonBtn_attack{
    background-image:url('https://castleagegame1-a.akamaihd.net/graphics/dungeon_btn_pvpattack.gif');
}
.dungeonBtn_attack:hover{
    background-image:url('https://castleagegame1-a.akamaihd.net/graphics/dungeon_btn_pvpattack_hover.gif');
}
.dungeonBtn_attack:active{
    background-image:url('https://castleagegame1-a.akamaihd.net/graphics/dungeon_btn_pvpattack_down.gif');
}
.dungeonBtn_steal{
    background-image:url('https://castleagegame1-a.akamaihd.net/graphics/dungeon_btn_pvpsteal.gif');
}
.dungeonBtn_steal:hover{
    background-image:url('https://castleagegame1-a.akamaihd.net/graphics/dungeon_btn_pvpsteal_hover.gif');
}
.dungeonBtn_steal:active{
    background-image:url('https://castleagegame1-a.akamaihd.net/graphics/dungeon_btn_pvpsteal_down.gif');
}
.dungeonBtn_quick{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/dungeon_btn_quick.gif');
}
.dungeonBtn_quick:hover{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/dungeon_btn_quick_hover.gif');	
}
.dungeonBtn_quick:active{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/dungeon_btn_quick_down.gif');	
}
.dungeonBtn_power{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/dungeon_btn_strong.gif');	
}
.dungeonBtn_power:hover{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/dungeon_btn_strong_hover.gif');	
}
.dungeonBtn_power:active{	
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/dungeon_btn_strong_down.gif');	
}
.dungeonBtn_parry{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/dungeon_btn_guard.gif');
}
.dungeonBtn_parry:hover{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/dungeon_btn_guard_hover.gif');	
}
.dungeonBtn_parry:active{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/dungeon_btn_guard_down.gif');
}
.dungeonBtn_next{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/dungeon_btn_continue.gif');
}
.dungeonBtn_next:hover{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/dungeon_btn_continue_hover.gif');	
}
.dungeonBtn_next:active{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/dungeon_btn_continue_down.gif');
}
.dungeonBtn_warrior_special_off{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/warriorspecial_btn_off.png');
}
.dungeonBtn_warrior_special_on{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/warriorspecial_btn.png');
}
.dungeonBtn_warrior_special_on:hover{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/warriorspecial_btn_over.png');
}
.dungeonBtn_warrior_special_on:active{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/warriorspecial_btn_down.png');
}
.dungeonBtn_rogue_special_off{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/roguespecial_btn_off.png');
}
.dungeonBtn_rogue_special_on{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/roguespecial_btn.png');
}
.dungeonBtn_rogue_special_on:hover{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/roguespecial_btn_over.png');
}
.dungeonBtn_rogue_special_on:active{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/roguespecial_btn_down.png');
}
.dungeonBtn_cleric_special_off{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/clericspecial_btn_off.png');
}
.dungeonBtn_cleric_special_on{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/clericspecial_btn.png');
}
.dungeonBtn_cleric_special_on:hover{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/clericspecial_btn_over.png');
}
.dungeonBtn_cleric_special_on:active{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/clericspecial_btn_down.png');
}
.dungeonBtn_mage_special_off{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/magespecial_btn_off.png');
}
.dungeonBtn_mage_special_on{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/magespecial_btn.png');
}
.dungeonBtn_mage_special_on:hover{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/magespecial_btn_over.png');
}
.dungeonBtn_mage_special_on:active{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/magespecial_btn_down.png');
}
.dungeonBtn_down{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/dungeon_btn_continue.gif');	
}
.dungeonBtn_exit{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/dungeon_btn_exit.gif');
}
.dungeonBtn_exit:hover{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/dungeon_btn_exit_hover.gif');
}
.dungeonBtn_exit:active{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/dungeon_btn_exit_down.gif');
}
.dungeonBtn_enter{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/dungeon_btn_enter.gif');
}
.dungeonBtn_enter:hover{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/dungeon_btn_enter_hover.gif');
}
.dungeonBtn_enter:active{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/dungeon_btn_enter_down.gif');
}
.dungeonBtn_open{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/dungeon_btn_open.gif');
}
.dungeonBtn_open:hover{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/dungeon_btn_open_hover.gif');
}
.dungeonBtn_open:active{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/dungeon_btn_open_down.gif');
}
.dungeonBtn_heal:hover{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/dungeon_btn_heal_hover.gif');
}
.dungeonBtn_heal:active{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/dungeon_btn_heal_down.gif');
}
.dungeonBtn_heal{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/dungeon_btn_heal.gif');
}
.dungeonBtn_quit{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/dungeon_btn_continue.gif');
}
.dungeonBtn_recharge
{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/dungeon_btn_revive.gif');
}
.dungeonBtn_recharge:hover
{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/dungeon_btn_revive_hover.gif');
}
.dungeonBtn_recharge:active
{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/dungeon_btn_revive_down.gif');
}
.dungeonBtn_enter_heal{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/dungeon_btn_enter.gif');
}
.dungeonBtn_enter_heal:hover{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/dungeon_btn_enter_hover.gif');
}
.dungeonBtn_enter_heal:active{
	background-image:url('https://castleagegame1-a.akamaihd.net/graphics/dungeon_btn_enter_down.gif');
}


.menu{
	width:650px;
	height:40px;
	display:block;
	border:none;
	border:0px;
	margin:0px;
	padding:0px;
	font-size:14px;
	font: 67.5%;
	font-family: Verdana, Helvetica, sans-serif;
	z-index:100;
	}
.menu ul{
	list-style:none;
	margin:0;
	padding:0;
	z-index:100;
	}
	.menu li{
		position:relative;
		float:left;
		height:39px;
	}
	.menu li a{
		line-height:38px;
		width: 97px;
		margin-right: 10px;
	}
		
		.menu li a#festival_menu_home {
			display:block;
			background-image:url('https://castleagegame1-a.akamaihd.net/graphics/festival_menu1.gif');
		}
		
		.menu li a#festival_menu_home:hover, .menu ul li:hover a#festival_menu_home{
			display:block;
			background-image:url('https://castleagegame1-a.akamaihd.net/graphics/festival_menu1_on.gif');
		}

		.menu li a#festival_menu_arena {
			display:block;
			background-image:url('https://castleagegame1-a.akamaihd.net/graphics/festival_menu2.gif');
		}

		.menu li a#festival_menu_arena:hover, .menu ul li:hover a#festival_menu_arena{
			display:block;
			background-image:url('https://castleagegame1-a.akamaihd.net/graphics/festival_menu2_on.gif');
		}
		
		.menu li a#festival_menu_monster {
			display:block;
			background-image:url('https://castleagegame1-a.akamaihd.net/graphics/festival_menu3.gif');
		}

		.menu li a#festival_menu_monster:hover, .menu ul li:hover a#festival_menu_monster{
			display:block;
			background-image:url('https://castleagegame1-a.akamaihd.net/graphics/festival_menu3_on.gif');
		}
		
		.menu li a#festival_menu_games {
			display:block;
			background-image:url('https://castleagegame1-a.akamaihd.net/graphics/festival_menu4.gif');
		}

		.menu li a#festival_menu_games:hover, .menu ul li:hover a#festival_menu_games{
			display:block;
			background-image:url('https://castleagegame1-a.akamaihd.net/graphics/festival_menu4_on.gif');
		}
		
		.menu li a#festival_menu_feats {
			display:block;
			background-image:url('https://castleagegame1-a.akamaihd.net/graphics/festival_menu5.gif');
		}

		.menu li a#festival_menu_feats:hover, .menu ul li:hover a#festival_menu_feats{
			display:block;
			background-image:url('https://castleagegame1-a.akamaihd.net/graphics/festival_menu5_on.gif');
		}
		
		.menu li a#festival_menu_tavern {
			display:block;
			background-image:url('https://castleagegame1-a.akamaihd.net/graphics/festival_menu6.gif');
		}

		.menu li a#festival_menu_tavern:hover, .menu ul li:hover a#festival_menu_tavern{
			display:block;
			background-image:url('https://castleagegame1-a.akamaihd.net/graphics/festival_menu6_on.gif');
		}
										
	.menu li ul{
		list-style:none;
		margin:0 0 0 2px;
		position:absolute;
		width:92px;
		text-align:center;
		z-index:100;
		}
	.menu li li {
		display:block;
		float:none;
		margin:0px;
		padding:0px;
		height:19px;
		width:92px;
		text-align:center;
		background-image:url('https://castleagegame1-a.akamaihd.net/graphics/festival_dropdown.jpg');
		}
	.menu li li a{
		display:block;
		line-height:19px;
		width: 92px;
	}
	.menu li div.bottom {
		width:92px;
		height:19px;
		background-image:url('https://castleagegame1-a.akamaihd.net/graphics/festival_dropdown_bottom.gif');
	}
	.menu li:hover li a{
		background:none;
		display:block;
		}
	.menu li ul a{
		display:block;
		height:19px;
		font-size:12px;
		font-style:normal;
		margin:0px;
	}
		.menu li ul a:hover, .menu li ul li:hover a{
			display:block;
			border:0px;
			text-decoration:none;
			background-image:url('https://castleagegame1-a.akamaihd.net/graphics/festival_dropdown2.jpg');
			}
	.menu p{
		clear:left;
		}	

		.warrior .guild_class_items .guild_item{
			display:none;
		}
	
		.warrior .guild_class_items .guild_item.warrior{
			display:block;
		}
		
		.cleric .guild_class_items .guild_item{
			display:none;
		}
	
		.cleric .guild_class_items .guild_item.cleric{
			display:block;
		}
		
		.rogue .guild_class_items .guild_item{
			display:none;
		}
	
		.rogue .guild_class_items .guild_item.rogue{
			display:block;
		}
		
		.mage .guild_class_items .guild_item{
			display:none;
		}
	
		.mage .guild_class_items .guild_item.mage{
			display:block;
		}
		
		#guild_create_page #open_recruitment_bg {
			background-image:url('https://castleagegame1-a.akamaihd.net/graphics/create_open_off.gif'); 
			width:118px;
			height:174px;
			margin-bottom:8px;
			cursor:pointer;
		}
		
		#guild_create_page #open_recruitment_bg.selected {
			background-image:url('https://castleagegame1-a.akamaihd.net/graphics/create_open_on.gif');
		}
		
		#guild_create_page #closed_recruitment_bg {
			background-image:url('https://castleagegame1-a.akamaihd.net/graphics/create_closed_off.gif'); 
			width:118px;
			height:174px;
			margin-bottom:8px;
			cursor:pointer;
		}
		
		#guild_create_page #closed_recruitment_bg.selected {
			background-image:url('https://castleagegame1-a.akamaihd.net/graphics/create_closed_on.gif'); 
		}
		
		
		#guild_create_page #payment_gold {
			background-image:url('https://castleagegame1-a.akamaihd.net/graphics/create_gold_off.gif'); 
			width:144px;
			height:68px;
			margin-bottom:8px;
			cursor:pointer;
		}
		
		#guild_create_page #payment_gold.selected {
			background-image:url('https://castleagegame1-a.akamaihd.net/graphics/create_gold_on.gif'); 
		}
		
		#guild_create_page #payment_favor {
			background-image:url('https://castleagegame1-a.akamaihd.net/graphics/create_favor_off.gif'); 
			width:144px;
			height:68px;
			margin-bottom:8px;
			cursor:pointer;
		}
		
		#guild_create_page #payment_favor.selected {
			background-image:url('https://castleagegame1-a.akamaihd.net/graphics/create_favor_on.gif'); 
		}
</style>	<div pub-key="pub-ad7c38c9-c314-434e-b54b-7c4aeb4f27bd" sub-key="sub-30af5a0a-b5b2-11e1-b662-b3d07d677918" ssl="on" origin="pubsub.pubnub.com" id="pubnub"></div>
	<script src="https://pubnub.s3.amazonaws.com/pubnub-3.1.min.js"></script>
	</head>
	<body style="background-image: url('https://castleagegame1-a.akamaihd.net/graphics/guild_webpage_bg.jpg');
	background-position: center top;
	background-repeat:no-repeat;
	background-color:black;
	margin: 0;">
		<center>
	<div id="AjaxLoadIcon" class="shield_wait" style='width: 100%;'>
		<div><img src="https://castleagegame1-a.akamaihd.net/graphics/shield_wait.gif" /></div>
	</div>
	
		
	<script type="text/javascript">

		function initPubNub(){
						    PUBNUB.subscribe({
			        channel    : 'guildchat_100003851490194_1340565613',      // CONNECT TO THIS CHANNEL.
			        restore    : false,              // STAY CONNECTED, EVEN WHEN BROWSER IS CLOSED OR WHEN PAGE CHANGES.
			        callback   : pusher_callback,
			    });
						getGuildChatUserCount();
		}
		
		function pusher_callback(response) {
			var data = response['data'];
			var event_name = response['name'];
			if(event_name=='guild_chat') {
				$('#chatNotificationCountInput').val(parseInt($('#chatNotificationCountInput').val())+1);
				if(parseInt($('#chatNotificationCountInput').val()) < 99) {
					$('.chatNotificationCount').text($('#chatNotificationCountInput').val());
				}
				var newMessage= "<div style='padding-top:3px;'><span style='color:#ffc100;'>"+data.player_name+"</span> (Now): "+data.message+"</div>"
				$('#chatGuildChat').append(newMessage);
				//$("#chatGuildChat").attr({ scrollTop: $("#chatGuildChat").attr("scrollHeight") });
				scrollToBottom("#chatGuildChat");
			} else if(event_name=='guild_channel_user_count') {
				$('#guildChatActiveMembers').text("(" + data.user_count + ")");
			} else if(event_name=='page_refresh') {
				if(data.reload_member_id==member_id) {
					window.location.reload();
				}
			} else if(event_name=='festival_guild_chat_log') {
				if($('#current_pg_url').val().indexOf('festival_guild_battle')!=-1 && data.player_id!=member_id) {

					$('#chatLogNotifications').val(parseInt($('#chatLogNotifications').val())+1);
					$('#chatLogNotificationText').text("(" + parseInt($('#chatLogNotifications').val()) + ")");
					$('#logNotificationText').text("(" + ( parseInt($('#chatLogNotifications').val()) + parseInt($('#attackLogNotifications').val())) + ")");

					var newMessage= "<div style='border-bottom: 1px solid white; color: black; padding-bottom: 10px; margin: 10px 20px 0;'>";
					newMessage+= "<div style='text-align:left;font-size:11px; padding: 15px 50px 0 5px;'> Just Now </div>";
					newMessage+= "<div style='padding: 10px 0 0 5px; float: left;'><img style='height:50px; width:50px;' src='https://castleagegame1-a.akamaihd.net/graphics/guild_symbol_160_"+data.guild_standard+".gif'/></div>";
					newMessage+= "<div style='padding: 10px 0 0 5px; float: left;'><img style='height:50px; width:50px;' src='http://graph.facebook.com/"+data.player_id+"/picture'/></div>";
					newMessage+= "<div style='float: left; padding: 10px 0 0 10px; width: 450px; font-size:15px'>";
					newMessage+= "<b><a onclick='ajaxLinkSend(\'globalContainer\', \'keep.php?casuser=1341402274\'); return false;'>" +data['name']+ "</a> of <a onclick='ajaxLinkSend(\'globalContainer\', \'guild.php?guild_id="+data.guild_id+"\'); return false;' >" +data['guild_name'] + "</a> wrote:</b> <br/>" + data['msg'] + "</div><div style='clear:both'></div></div>";
					$('#festival_chat_log_container').prepend(newMessage);
				}
			} else if(event_name=='festival_guild_attack_log') {
				if($('#current_pg_url').val().indexOf('festival_guild_battle')!=-1 && data.player_id!=member_id) {

					$('#attackLogNotifications').val(parseInt($('#attackLogNotifications').val())+1);
					$('#attackLogNotificationText').text("(" + parseInt($('#attackLogNotifications').val()) + ")");
					$('#logNotificationText').text("(" + ( parseInt($('#chatLogNotifications').val()) + parseInt($('#attackLogNotifications').val())) + ")");

					var newMessage= "<div style='border-bottom: 1px solid white; color: black; padding: 10px 0; margin: 0 20px 0;'>";
					newMessage+= "<div style='text-align:left;font-size:11px; padding: 15px 50px 0 5px;'> Just Now </div>";
					newMessage+= "<div style='padding: 10px 0 0 5px; float: left;'><img style='height:50px; width:50px;' src='https://castleagegame1-a.akamaihd.net/graphics/guild_symbol_160_"+data.guild_standard+".gif'/></div>";
					newMessage+= "<div style='padding: 10px 0 0 5px; float: left;'><img style='height:50px; width:50px;' src='http://graph.facebook.com/"+data.player_id+"/picture'/></div>";
					newMessage+= "<div style='float: left; padding: 10px 0 0 10px; width: 450px; font-size:15px'>";
					newMessage+= "<a onclick='ajaxLinkSend(\'globalContainer\', \'keep.php?casuser=1341402274\'); return false;'>" +data['name']+ "</a> of <a onclick='ajaxLinkSend(\'globalContainer\', \'guild.php?guild_id="+data.guild_id+"\'); return false;' >" +data['guild_name'] + "</a> " + data['msg'] + "</div><div style='clear:both'></div></div>";
					$('#festival_action_log_container').prepend(newMessage);

					$("#health_text_1_" + data.attacker_guild_health.guild_id).text(data.attacker_guild_health['1']);
					$("#health_text_2_" + data.attacker_guild_health.guild_id).text(data.attacker_guild_health['2']);
					$("#health_text_3_" + data.attacker_guild_health.guild_id).text(data.attacker_guild_health['3']);
					$("#health_text_4_" + data.attacker_guild_health.guild_id).text(data.attacker_guild_health['4']);

					$("#health_text_" + data.attacker_guild_health.guild_id).text(data.attacker_guild_health['total'])
					$("#health_bar_" + data.attacker_guild_health.guild_id).css('width', data.attacker_guild_health['inverse_percent_total'] + "%");

					$("#health_text_1_" + data.defender_guild_health.guild_id).text(data.defender_guild_health['1']);
					$("#health_text_2_" + data.defender_guild_health.guild_id).text(data.defender_guild_health['2']);
					$("#health_text_3_" + data.defender_guild_health.guild_id).text(data.defender_guild_health['3']);
					$("#health_text_4_" + data.defender_guild_health.guild_id).text(data.defender_guild_health['4']);

					$("#health_text_" + data.defender_guild_health.guild_id).text(data.defender_guild_health['total'])
					$("#health_bar_" + data.defender_guild_health.guild_id).css('width', data.defender_guild_health['inverse_percent_total'] + "%");

				}
			} else if(event_name=='festival_battle_ended') {
				if($('#festival_battle_status').val()=='alive') {
					ajaxLinkSend('globalContainer', 'festival_guild_battle.php?id=' + data.battle_id);
				}
			}

		}
		
		function clearFestivalNotifications() {
			$('#attackLogNotifications').val(0);
			$('#chatLogNotifications').val(0);
			$('#chatLogNotificationText').text("");
			$('#attackLogNotificationText').text("");
			$('#logNotificationText').text("");
		}
		
		$(document).ready(function() {
			initPubNub();
		});
		
		function submitGuildChat() {
			var chat_txt= $.trim($('#chatGuildChatTextInput').val());
			
			if(chat_txt.length <= 0) {
				return;
			} 
			
			$('#chatGuildChatTextInput').val('');
			var postData= {};
						postData['chat_text']= chat_txt;
			postData['type']='submit_chat'
			$.ajax({ url: 'chat_post.php', context: document.body, data: postData, type: 'POST', dataType: 'json'});
		}
		
		function getGuildChatUserCount() {
			var postData= {};
						postData['type']= 'update_user_count';
			$.ajax({ url: 'chat_post.php', context: document.body, data: postData, type: 'POST', dataType: 'json', success: function(data){
				$('#collapsedGuildChat').css('display', 'block');

				if(data.user_count > 0) {
					$('#guildChatActiveMembers').text("(" + data.user_count + ")");
				}
				
				if(data.army_count > 0) {
					$('#armyNotificatinCount').text(data.army_count);
					$('#armyNotificatinCount').css('color', 'white');
				}
				if(data.gift_count > 0) {
					$('#giftNotificatinCount').text(data.gift_count);
					$('#giftNotificatinCount').css('color', 'white');
				}
				
				var total_init_notifications= data.army_count + data.gift_count;
				if(total_init_notifications > 0) {
					$('#chatNotificationCountInput').val(total_init_notifications);
					if(total_init_notifications < 99) {
						$('.chatNotificationCount').text(total_init_notifications);
					} else {
						$('.chatNotificationCount').text(99);
					}
				}
			}});
		}
		
		function guildChatHandleKeyPress(e){
			var key=e.keyCode || e.which;
			if (key==13){
				submitGuildChat();
			}
		}
		
		function toggleGuildChat() {
			if($('#collapsedGuildChat').is(":visible")) {
				$('#collapsedGuildChat').hide();
				$('#expandedGuildChat').show();
				//$("#chatGuildChat").attr({ scrollTop: $("#chatGuildChat").attr("scrollHeight") });
				scrollToBottom("#chatGuildChat");
				$("#chatGuildChatTextInput").focus();
			} else {
				$('#collapsedGuildChat').show();
				$('#expandedGuildChat').hide();
				$('#chatNotificationCountInput').val(0);
				$('.chatNotificationCount').text('');
			}
		}

	</script>
	
	<input type='hidden' value='0' id='chatNotificationCountInput'/>
	
	<div class='item_hover_info chatOptionHoverDiv' id='wall_chat_hover_info'>
		<div class="chatOptionHoverText">
			<b>Wall Chat</b>
		</div>
	</div>
	
	<div class='item_hover_info chatOptionHoverDiv' id='player_chat_hover_info'>
		<div class="chatOptionHoverText">
			<b>Player Chat</b>
		</div>
	</div>
	
	<div class='item_hover_info chatOptionHoverDiv' id='guild_chat_hover_info'>
		<div class="chatOptionHoverText">
			<b>Guild Chat</b>
		</div>
	</div>
		<div id="globalContainer">



<div class="game" id="index" style="background-image: url('https://castleagegame1-a.akamaihd.net/graphics/ws_middle.jpg'); width: 760px; padding: 0 0px;overflow-x:hidden;">
	<div id="globalcss" class="layout">
		    	<div style="height:25px;">
      		<div id="main_bntp" width="100%" >
      			<div style="clear:both"></div>
        		<div style="text-align:right;color:#b09060;padding-top:5px;font-family:Times New Roman;font-size:10pt;overflow:hidden;">
				<a href="help.php" onclick="ajaxLinkSend('globalContainer', 'help.php'); return false;" ><span style='color:#b09060;'>Help/FAQ</span></a> |
				<a target="_blank" href="http://www.castleageforums.com/cforum/" style="color:#b09060" > Forum </a> |
				<a href="http://web.castleagegame.com/castle/priv_policy.html" style="color:#b09060" > Privacy Policy </a> |
												<a href="army.php" onclick="ajaxLinkSend('globalContainer', 'army.php'); return false;" ><span style='color:#b09060;'>My Army (758)</span></a> |
								<a href="keep.php" onclick="ajaxLinkSend('globalContainer', 'keep.php'); return false;" ><span style='color:#b09060;'>My Stats</span></a>&nbsp;&nbsp;
				|
														Welcome Jew Banker (<a onclick="javascript:document.location.href='connect_login.php?platform_action=CA_web3_logout';" href="#">Logout</a>)&nbsp;&nbsp;
									        		</div>
        		<div style="clear:both;"></div>
      		</div>
    	</div>
		    	<div id="main_sts_container">
    		
			<div style='width:760px;height:79px;background-image:url("https://castleagegame1-a.akamaihd.net/graphics/header_persist_background.jpg");font-size:10px;font-weight:bold;'>

				<div style="height:50px;overflow:hidden;">

					<div style="float:left;width:150px;overflow:hidden;">

						<div style="float:left;width:60px;height:100%">
							<div style='padding:5px 0 0 15px;'>
								<div style="width:40px;height:40px;cursor:pointer;"
									 onClick="PositionAndDisplayPopupAtTop('headerPersistEnergyRefill', this, '10', '200','noclass'); return false">
								     		<div style='display:none;' id="headerPersistEnergyRefill">
			
						    		 <div style="width:740px;height:203px;background-image:url('https://castleagegame1-a.akamaihd.net/graphics/oracle_container_energy.jpg');background-repeat:no-repeat;">
										<div style='float:left; padding:21px 0 0 24px; width:190px;'>
											<img style="height:160px;" src="https://castleagegame1-a.akamaihd.net/graphics/hero_edea.jpg" />
										</div>
										<div style='float:left;'>
											<div style="padding:0px; color:#591700; padding-top:30px;">
																							<div style='float:left;'>
													<a href="index.php?&quickbuychoice=6&option=2" onclick="ajaxLinkSend('globalContainer', 'index.php?&quickbuychoice=6&option=2'); return false;" ><div class="imgButton"><img src="https://castleagegame1-a.akamaihd.net/graphics/oracle_btn_recharge.gif" /></div></a>												</div>
												<div style='float:left; font-weight:bold; font-size:11px; padding-left:50px;'>
													Spend 10 Favor Points to refill energy immediately.<br/>
													Energy refills are capped at 2000 energy per refill.
												</div>
																						<div style='clear:both;'></div>
											</div>
											
											<div style='padding:0px; color:#2d4200; padding-top:19px; '>
												<div style='float:left;'>
													<a href="keep.php" onclick="ajaxLinkSend('globalContainer', 'keep.php'); return false;" ><div class="imgButton"><img src="https://castleagegame1-a.akamaihd.net/graphics/oracle_btn_keep.gif" /></div></a>												</div>
												<div style='float:left; font-size:11px; padding:8px 0 0 10px; font-weight:bold;'>
													1) Allocate skill points to Max Energy Points at your keep.
												</div>
												<div style='clear:both;'></div>
											</div>

											<div style='padding:0px; color:#2d4200; padding-top:5px;'>
																									<div style='float:left;'>
														<a href="index.php?&refill=ene" onclick="ajaxLinkSend('globalContainer', 'index.php?&refill=ene'); return false;" ><div class="imgButton"><img src="https://castleagegame1-a.akamaihd.net/graphics/oracle_btn_potion.gif" /></div></a>													</div>
													<div style='float:left; font-size:11px; padding:8px 0 0 10px; font-weight:bold;'>
														2) Consume a Full Energy Potion.
													</div>
																								<div style='clear:both;'></div>
											</div>
										</div>
										<div style='clear:both;'></div>
									</div>
						    		</div>								</div>
							</div>
						</div>
						<div style="float:left;width:90px;">
							<div style='padding:10px 0 0 0;height:15px;' title="Used for Quests. Get more from The Oracle.">
								Energy
																	<div style="float:right;">
		                            	<span id="energy_time_container" style="color: #197B30;">+<span id="energy_time_value" style="font-size:9px"></span></span>
		                            </div>
	                        								</div>
							<div style='padding:2px 0 0 0;' title="63/388">
								<a href="oracle.php" onclick="ajaxLinkSend('globalContainer', 'oracle.php'); return false;"  style="text-decoration:none;color: #4b3715;font-size:11px;"><strong><span id="energy_current_value">63</span>/<span style=''>388</span></strong></a>							</div>
						</div>
						<div style="clear:both;"></div>

					</div>

					<div style="float:left;width:138px;overflow:hidden;">

						<div style="float:left;width:49px;height:100%">
							<div style='padding:5px 0 0 5px;'>
								<div style="width:40px;height:40px;cursor:pointer;"
									onClick="PositionAndDisplayPopupAtTop('headerPersistStaminaRefill', this, '10', '200','noclass'); return false">
								     		<div style='display:none;' id="headerPersistStaminaRefill">
			
						    		 <div style="width:740px;height:203px;background-image:url('https://castleagegame1-a.akamaihd.net/graphics/oracle_container_stamina.jpg');background-repeat:no-repeat;">
										<div style='float:left; padding:21px 0 0 24px; width:190px;'>
											<img style="height:160px;" src="https://castleagegame1-a.akamaihd.net/graphics/hero_edea.jpg" />
										</div>
										<div style='float:left;'>
											<div style="padding:0px; color:#591700; padding-top:30px;">
																							<div style='float:left;'>
													<a href="index.php?&quickbuychoice=6&option=1" onclick="ajaxLinkSend('globalContainer', 'index.php?&quickbuychoice=6&option=1'); return false;" ><div class="imgButton"><img src="https://castleagegame1-a.akamaihd.net/graphics/oracle_btn_recharge.gif" /></div></a>												</div>
												<div style='float:left; font-weight:bold; font-size:11px; padding-left:50px;'>
													Spend 10 Favor Points to refill stamina immediately.<br/>
													Stamina refills are capped at 1000 energy per refill.
												</div>
																						<div style='clear:both;'></div>
											</div>
											
											<div style='padding:0px; color:#2d4200; padding-top:19px; '>
												<div style='float:left;'>
													<a href="keep.php" onclick="ajaxLinkSend('globalContainer', 'keep.php'); return false;" ><div class="imgButton"><img src="https://castleagegame1-a.akamaihd.net/graphics/oracle_btn_keep.gif" /></div></a>												</div>
												<div style='float:left; font-size:11px; padding:8px 0 0 10px; font-weight:bold;'>
													1) Allocate skill points to Max Stamina Points at your keep.
												</div>
												<div style='clear:both;'></div>
											</div>

											<div style='padding:0px; color:#2d4200; padding-top:5px;'>
																									<div style='float:left;'>
														<a href="index.php?&refill=stm10" onclick="ajaxLinkSend('globalContainer', 'index.php?&refill=stm10'); return false;" ><div class="imgButton"><img src="https://castleagegame1-a.akamaihd.net/graphics/oracle_btn_potion.gif" /></div></a>													</div>
													<div style='float:left; font-size:11px; padding:8px 0 0 10px; font-weight:bold;'>
														2) Consume a 10 Stamina Potion.
													</div>
																								<div style='clear:both;'></div>
											</div>
										</div>
										<div style='clear:both;'></div>
									</div>
						    		</div>								</div>
							</div>
						</div>
						<div style="float:left;width:89px;">
							<div style='padding:10px 0 0 0;height:15px;' title="Used for Battles.">
								Stamina
																	<div style="float:right;">
	                            		<span id="stamina_time_container" style="color: #197B30;">+<span id="stamina_time_value" style="font-size:9px"></span></span>
	                            	</div>
	                        								</div>
							<div style='padding:2px 0 0 0;' title="65/395">
								<a href="keep.php" onclick="ajaxLinkSend('globalContainer', 'keep.php'); return false;"  style="text-decoration: none; color:#4b3715;font-size:11px;"><strong><span id="stamina_current_value">65</span>/<span style=''>395</span></strong></a>							</div>
						</div>
						<div style="clear:both;"></div>

					</div>

					<div style="float:left;width:138px;overflow:hidden;">

						<div style="float:left;width:49px;height:100%">
							<div style='padding:5px 0 0 5px;'>
								<div style="width:40px;height:40px;cursor:pointer;"
									onClick="PositionAndDisplayPopupAtTop('headerPersistHealthRefill', this, '10', '200','noclass'); return false">
								     		<div style='display:none;' id="headerPersistHealthRefill">
			
						    		 <div style="width:740px;height:203px;background-image:url('https://castleagegame1-a.akamaihd.net/graphics/oracle_container_health.jpg');background-repeat:no-repeat;">
										<div style='float:left; padding:21px 0 0 24px; width:190px;'>
											<img style="height:160px;" src="https://castleagegame1-a.akamaihd.net/graphics/hero_edea.jpg" />
										</div>
										<div style='float:left;'>
											<div style="color:#591700;padding-top:30px;">
												<div style='float:left;'>
													<form onsubmit="ajaxFormSend('globalContainer', 'index.php?', this);return false;" method="post" id="headerHealForm" >
				                						<input type="hidden" value="heal_avatar" name="action" />
				                						<input type="hidden" name="bqh" value="96464f621978fa4704532fed3e314b4f" />
				            							<input type="image" class="imgButton" alt="Heal" src="https://castleagegame1-a.akamaihd.net/graphics/oracle_btn_heal.gif" value="Heal Wounds" />
				                						<input type="hidden" name="ajax"  value="1" />
				                					</form>
												</div>
												<div style='float:left; font-weight:bold; font-size:11px;padding-left:50px;'>
													Spend $0 gold to heal to Max Health.<br/>
													Health is used in PVP duel formats and monsters.
												</div>
												<div style='clear:both;'></div>
											</div>
											
											<div style='color:#2d4200;padding-top:40px; '>
												<div style='float:left;'>
													<a href="keep.php" onclick="ajaxLinkSend('globalContainer', 'keep.php'); return false;" ><div class="imgButton"><img src="https://castleagegame1-a.akamaihd.net/graphics/oracle_btn_keep.gif" /></div></a>												</div>
												<div style='float:left; font-size:11px; padding:8px 0 0 10px; font-weight:bold;'>
													Visit the keep to restore your Health!
												</div>
												<div style='clear:both;'></div>
											</div>

										</div>
										<div style='clear:both;'></div>
									</div>
						    		</div>								</div>
							</div>
						</div>
						<div style="float:left;width:89px;">
							<div style='padding:10px 0 0 0;height:15px;' title="Defend yourself in Battles.">
								Health
															</div>
							<div style='padding:2px 0 0 0;' title="268/268">
								<a href="keep.php" onclick="ajaxLinkSend('globalContainer', 'keep.php'); return false;"  style="text-decoration: none; color:#4b3715;font-size:11px;"><strong><span id="health_current_value">268</span>/<span style=''>268</span></strong></a>							</div>
						</div>
						<div style="clear:both;"></div>

					</div>

					<div style="float:left;width:140px;overflow:hidden;">

						<div style="float:left;width:52px;height:100%">
							<div style='padding:5px 0 0 5px;'>
								<div style="width:40px;height:40px;cursor:pointer;"
									onClick="PositionAndDisplayPopupAtTop('headerPersistGoldRefill', this, '10', '200','noclass'); return false">
								     		<div style='display:none;' id="headerPersistGoldRefill">
			
						    		 <div style="width:740px;height:203px;background-image:url('https://castleagegame1-a.akamaihd.net/graphics/oracle_container_gold.jpg');background-repeat:no-repeat;">
										<div style='float:left; padding:21px 0 0 24px; width:190px;'>
											<img style="height:160px;" src="https://castleagegame1-a.akamaihd.net/graphics/hero_edea.jpg" />
										</div>
										<div style='float:left;'>
											<div style="color:#591700; padding-top:30px;">
												<div style='float:left;'>
													<form onsubmit="ajaxFormSend('globalContainer', 'index.php?', this);return false;" method="post">
					        							<input type="image" class="imgButton" name="do" src="https://castleagegame1-a.akamaihd.net/graphics/oracle_btn_bank.gif" value="Stash"/>
					        							<input type="hidden" name="bqh" value="96464f621978fa4704532fed3e314b4f" />
					        							<input type="hidden" name="header_stash_gold" value="1" />
					        							<input type="hidden" name="ajax"  value="1" /> 
					    	            			</form>
												</div>
												<div style='float:left; font-weight:bold; font-size:11px; padding-left:50px;'>
													Spend a 10% fee to bank 576,763,445,031 gold.<br/>
													Banked gold cannot be stolen by other players!
												</div>
												<div style='clear:both;'></div>
											</div>
											
											<div style='color:#2d4200; padding-top:40px; '>
												<div style='float:left;'>
													<a href="keep.php" onclick="ajaxLinkSend('globalContainer', 'keep.php'); return false;" ><div class="imgButton"><img src="https://castleagegame1-a.akamaihd.net/graphics/oracle_btn_keep.gif" /></div></a>												</div>
												<div style='float:left; font-size:11px; padding:8px 0 0 10px; font-weight:bold;'>
													Visit the keep to bank your gold!
												</div>
												<div style='clear:both;'></div>
											</div>

										</div>
										<div style='clear:both;'></div>
									</div>
						    		</div>								</div>
							</div>
						</div>
						<div style="float:left;width:88px;">
							<div style='padding:10px 0 0 0;height:15px;' title="Earn Gold through Questing, Battles, Duels and The Oracle.">
								Gold
								<div style="float:right;">
                            		<span style="color: #197B30;">+<span id="gold_time_value" style="font-size:9px"></span></span>
                            	</div>
							</div>
							<div style='padding:2px 0 0 0;' title="$576,763,445,031">
								<a href="oracle.php" onclick="ajaxLinkSend('globalContainer', 'oracle.php'); return false;"  style="text-decoration: none; color: #4b3715;font-size:11px;"><strong id="gold_current_value" class="gold">$576.76B</strong></a>							</div>
						</div>
						<div style='clear:both;'></div>

					</div>

					<div style="float:left;width:180px;overflow:hidden;" title="Your XP: 665381/668307&#013;You need 2926 Experience Points to get to the next level.">
						<div style='padding:11px 0 0 17px;text-align:center;height:15px;overflow:hidden;'>
		                    <div style="overflow:hidden;width:154px;height:15px;background-color:black;">
		                    	<div style="background-image:url('https://castleagegame1-a.akamaihd.net/graphics/header_persist_xpbar.jpg');text-align:left;float:left;height:15px;width:29%;">&nbsp;</div>
		                    </div>

		                    <div style="position:relative;top:-15px;z-index:0;">
	                			<a href="keep.php" onclick="ajaxLinkSend('globalContainer', 'keep.php'); return false;"  style="text-decoration: none;font-size:10px;"><div style='color:#ffffff'>Level: 326</div></a>                			</div>
		                </div>
		                <div id="header_player_xp_totals" style='padding:2px 0 0 20px;display:none;filter:alpha(opacity=100);'>
		                	XP: <a href="quests.php" onclick="ajaxLinkSend('globalContainer', 'quests.php'); return false;"  style="text-decoration: none; color: #4b3715;font-size:11px;"><strong>665381/668307</strong></a>		                </div>
		                <div id="header_player_xp_needed" style='padding:2px 0 0 20px;filter:alpha(opacity=100);'>
		                	XP needed: <a href="quests.php" onclick="ajaxLinkSend('globalContainer', 'quests.php'); return false;"  style="text-decoration: none; color: #197B30;font-size:11px;"><strong>2926</strong></a>		                </div>
					</div>

					<div style="clear:both;"></div>
				</div>

				<div id="mainHeaderTabs" style="height:28px;color:#6fa5af;font-weight:normal;overflow:hidden;">
					<div style="padding:4px 0 0 0;">

						<div style="float:left;padding:0 0 0 5px;">
							<img src="https://castleagegame1-a.akamaihd.net/graphics/header_blue_left.jpg" 
								 style="cursor:pointer"
								 onClick="switchTabSection('main_header_tabs_view.php', 'mainHeaderTabs', '2_index.php?');"
								 />
						</div>

						<div style="float:left;padding:0 0 0 10px;">
							<div style='width:163px;height:22px;background-image:url("https://castleagegame1-a.akamaihd.net/graphics/header_persist_collect_container.jpg");'>
								<div style='float:left;width:25px;'>
									<img style="float:left;" width="20" height="20" src="https://castleagegame1-a.akamaihd.net/graphics/demi_symbol_1.gif" />
								</div>
								<div style="float:left;width:65px;">
									<div style="padding:4px 0 0 0;">
										Demi:
									</div>
								</div>
								<div style="float:left;width:70px;">
										<div style="padding:4px 0 0 10px;font-weight:bold;">3h 7m </div>								</div>

								<div style="clear:both;"></div>
							</div>
						</div>

						<div style="float:left;padding:0 0 0 10px;">
							<div style='width:163px;height:22px;background-image:url("https://castleagegame1-a.akamaihd.net/graphics/header_persist_collect_container_items.jpg");'>
								<div style="float:left;width:90px;">
									<div style="padding:4px 0 0 23px;">
										Archive:
									</div>
								</div>
								<div style="float:left;width:70px;">
									<div style="padding:4px 0 0 0;font-weight:bold;">3hrs 7m</div>								</div>

								<div style="clear:both;"></div>
							</div>
						</div>

						<div style="float:left;padding:0 0 0 10px;">
							<div style='width:163px;height:22px;background-image:url("https://castleagegame1-a.akamaihd.net/graphics/header_persist_collect_container_wood.jpg");'>
								<div style="float:left;width:90px;">
									<div style="padding:4px 0 0 30px;">
										Resource:
									</div>
								</div>
								<div style="float:left;width:70px;">
									<div style="padding:4px 0 0 10px;font-weight:bold;">8h 42m </div>								</div>

								<div style="clear:both;"></div>
							</div>
						</div>

						<div style="float:left;padding:0 0 0 10px;">
							<div style='width:163px;height:22px;background-image:url("https://castleagegame1-a.akamaihd.net/graphics/header_persist_collect_container_crystal.jpg");'>
								<div style="float:left;width:90px;">
									<div style="padding:4px 0 0 30px;">
										Crystal:
									</div>
								</div>
								<div style="float:left;width:70px;">
									<div style="padding:4px 0 0 10px;font-weight:bold;">8h 42m </div>								</div>

								<div style="clear:both;"></div>
							</div>
						</div>

						<div style="float:left;padding:0 0 0 10px;">
							<img src="https://castleagegame1-a.akamaihd.net/graphics/header_blue_right.jpg"
								 style="cursor:pointer"
								 onClick="switchTabSection('main_header_tabs_view.php', 'mainHeaderTabs', '4_index.php?');"
								 />
						</div>

						<div style="clear:both;"></div>

					</div>
				</div>
				
			</div>

			<input type="hidden" id="gold_time_sec" value="2055" />
		    <input type="hidden" id="gold_current_value_amount" value="576763445031" />
		    <input type="hidden" id="gold_current_recharge_time" value="3600" />
		    <input type="hidden" id="gold_current_increment" value="384104570" />
		    
		    		        <input type="hidden" id="stamina_time_sec" value="284" />
		        <input type="hidden" id="stamina_current_value_amount" value="65" />
		        <input type="hidden" id="stamina_current_max" value="395" />
		        <input type="hidden" id="stamina_current_recharge_time" value="300" />
		    		    
		    		        <input type="hidden" id="energy_time_sec" value="284" />
		        <input type="hidden" id="energy_current_value_amount" value="63" />
		        <input type="hidden" id="energy_current_max" value="388" />
		        <input type="hidden" id="energy_current_recharge_time" value="300" />
		    		    
		        	</div>

		<div id="app_body_container">

    	<div id="main_bn_container">
    	          		<div id="main_bn" valign="top" class=''>
							<div style='float:left; padding:4px 0 0 4px; text-align:left;'>
																
						<div style='width:161px;height:4px;'></div>
	            	    														<div id="persistHomeFPPlateClosed" title="Favor Points" style='display:none;cursor:pointer;width:76px;height:35px;background-image:url("https://castleagegame1-a.akamaihd.net/graphics/home_fp_closed_plate.gif");'>
								<div style="float:left;width:50px;height:100%;" onclick="ajaxLinkSend('globalContainer', 'oracle.php'); return false;">
								</div>
								<div style="float:left;width:26px;height:100%;" 
									 onclick="$('#persistHomeFPPlateClosed').hide();
											  $('#persistHomeFPPlateOpen').show();
											  quick_ajax('index.php?headerFavorPlate=1');
											  ">
								</div>
								<div style="clear:both;"></div>
							</div>

							<div id="persistHomeFPPlateOpen" title="Favor Points" style='display:block;cursor:pointer;width:140px;height:35px;background-image:url("https://castleagegame1-a.akamaihd.net/graphics/home_fp_open_plate.gif");'>
								<div style="float:left;width:50px;height:100%;" onclick="ajaxLinkSend('globalContainer', 'oracle.php'); return false;">
								</div>
								<div style="float:left;width:90px;height:100%;overflow:hidden;" 
									 onclick="$('#persistHomeFPPlateClosed').show();
									 		  $('#persistHomeFPPlateOpen').hide();
									 		  quick_ajax('index.php?headerFavorPlate=0');">
									<div style='padding:3px 0 0 10px;color:white;text-align:center;font-weight:bold;font-size:11px;'>
										<span style="font-size:9px;">Favor:</span><br/>
										32									</div>
								</div>
								<div style="clear:both;"></div>
							</div>

							<div style='width:161px;height:4px;'></div>
															<div id="persistHomeConquestPlateClosed" title="Conquest Tokens" style='display:none;cursor:pointer;width:76px;height:35px;background-image:url("https://castleagegame1-a.akamaihd.net/graphics/home_conquest_closed_plate.gif");'>
									<div style="float:left;width:50px;height:100%;" onclick="ajaxLinkSend('globalContainer', 'guildv2_conquest_command.php'); return false;">
									</div>
									<div style="float:left;width:26px;height:100%;" 
										 onclick="$('#persistHomeConquestPlateClosed').hide();
										 		  $('#persistHomeConquestPlateOpen').show();
										 		  quick_ajax('index.php?headerConquestTokenPlate=1');
										 		  ">
									</div>
									<div style="clear:both;"></div>
								</div>

								<div id="persistHomeConquestPlateOpen" title="Conquest Tokens" style='display:block;cursor:pointer;width:140px;height:35px;background-image:url("https://castleagegame1-a.akamaihd.net/graphics/home_conquest_open_plate.gif");'>
									<div style="float:left;width:50px;height:100%;" onclick="ajaxLinkSend('globalContainer', 'guildv2_conquest_command.php'); return false;">
									</div>
									<div style="float:left;width:90px;height:100%;overflow:hidden;" 
										 onclick="$('#persistHomeConquestPlateClosed').show();
										 		 $('#persistHomeConquestPlateOpen').hide();
										 		 quick_ajax('index.php?headerConquestTokenPlate=0');
										 		 ">
										<div style='padding:3px 0 0 10px;color:white;text-align:center;font-weight:bold;font-size:11px;'>
											<span style="font-size:9px;">Tokens:</span><br/>
											11										</div>
									</div>
									<div style="clear:both;"></div>
								</div>
							
							
										</div>
				
			</div>
    	</div>

                <div style='float:left;height:1px;width:1px;'>
        	<input type="text" id="main_anchor" style="width:1px; height:1px; background-color:white; border:0; margin:0; padding:0; float:left;" />
        </div>
        

        <div style="background-image:url('https://castleagegame1-a.akamaihd.net/graphics/mainnav_holderbar.jpg');width:760px;height:44px;">
            <div id="gchat_anchor"></div>
		<div id='collapsedGuildChat'
			 onclick='$("#expandedGuildChat").toggle();$("#chatGuildChatTextInput").focus();scrollToBottom("#chatGuildChat");' 
			 style="background-image: url('https://castleagegame1-a.akamaihd.net/graphics/mainnav_top_chat.gif'); width:51px; height:30px;position:absolute; font-family: Verdana; cursor:pointer;z-index:1; margin: 5px 0 0 5px;">
			<div class='chatNotificationCount' style='text-align:center; font-weight:bold;padding: 3px 16px 0 9px;'></div>
		</div>

		<div class="mainChatView" id='wallAndChatSection' style="background-image: url('https://castleagegame1-a.akamaihd.net/graphics/chat_bubble_bg.gif'); width:365px; height:306px;position:absolute; z-index:100; font-family: Verdana; text-align:left; display:none; margin: 5px 0 0 5px;font-weight:bold;">
			
    <div class='chatNotificationCount'
         style='text-align:center; font-weight:bold;padding:3px 16px 0 9px; width:26px; height:25px; cursor:pointer;' 
         onclick='$(".mainChatView").hide();'>
    </div>
    <div id='wallChatHeader' style='padding-top:0px; height:35px; padding-bottom:2px;'>
        <div style='float:left; width:130px;'>
            <div style='color:white; font-weight:bold; font-size:11px;padding:12px 0 0 20px;'>
                Wall 
            </div>
        </div>

        <div style='padding:7px 0 0 140px;'>
            <div style='background-image: url("https://castleagegame1-a.akamaihd.net/graphics/chat_icon_wall_on.gif");background-repeat:no-repeat;float:left;height:25px;width:70px;text-align:center;' 
                 onMouseOut="hideItemPopup('wall_chat_hover_info',event);return false;"
                 onMouseOver="showItemPopup('wall_chat_hover_info', this, 43, 10);return false;"
                >
                <div style='padding:5px 0 0 40px;color:#00fc65;font-size:12px;'>
                    <div style='width:20px;text-align:center;'>
                        0                    </div>
                </div>
            </div>

            <div style='background-image: url("https://castleagegame1-a.akamaihd.net/graphics/chat_icon_chat_off.gif");background-repeat:no-repeat;float:left;height:25px;width:70px;cursor:pointer;text-align:center;' 
                 onClick="ajaxLinkSend('wallAndChatSection', 'wall_chat_log_view.php?mainChatTab=2');"
                 onMouseOut="hideItemPopup('player_chat_hover_info',event);return false;"
                 onMouseOver="showItemPopup('player_chat_hover_info', this, 43, 10);return false;"
                >
                <div style='padding:5px 0 0 40px;color:#00fc65;font-size:12px;'>
                    <div style='width:20px;text-align:center;'>
                        0                    </div>
                </div>
            </div>

            <div class="guildChatTab"
                 style='background-image: url("https://castleagegame1-a.akamaihd.net/graphics/chat_icon_guild_off.gif");background-repeat:no-repeat;float:left;height:25px;width:70px;cursor:pointer;text-align:center;' 
                 onMouseOut="hideItemPopup('guild_chat_hover_info',event);return false;"
                 onMouseOver="showItemPopup('guild_chat_hover_info', this, 43, 10);return false;"
                >
                <div style='padding:5px 0 0 40px;color:#00fc65;font-size:12px;'>
                    <div class="chatNotificationCount" style='width:20px;text-align:center;'>
                    </div>
                </div>
            </div>
        </div>

        <div style='clear:both;'></div>
    </div>

    <div class='mainChatContent' style='text-align:left; color:white;padding: 0px 10px;font-size:12px;overflow-y:auto;height:210px;width:340px;'>
        <div style="padding:3px 0 10px 10px;">Make a wall post!</div>    </div>
    <div style="clear:both"></div>

    <div style="width:280px; margin:5px 0 0 10px;">
        <form action="/" id="mainChatWallPostForm">
            <input id="mainChatWallTextInput" 
                   type="text"
                   name="main_chat_wall_post"
                   style="width:345px;height:18px;background-color:black;color:white;border:none;"/>
        </form>
    </div>
    <div style="clear:both"></div>

    <script>
        $("#mainChatWallTextInput").focus();

        // only needed for textarea tag
        // $("#mainChatWallPostForm").keypress(function(event) {
        //     if (event.which == 13) {
        //         $("#mainChatWallPostForm").submit();
        //     }
        // });

        // Attach a submit handler to the form
        $( "#mainChatWallPostForm" ).submit(function( event )
        {
            // Stop form from submitting normally
            event.preventDefault();
            ajaxFormSend('wallAndChatSection', 'wall_chat_log_view.php', $(this));
        });
    </script>

<script>
  scrollToBottom('.mainChatContent');

  function guildChatTabHandler()
  {
      $('#wallAndChatSection').toggle();
      $('#expandedGuildChat').toggle();
      scrollToBottom('#chatGuildChat');
      $('#chatGuildChatTextInput').focus();
  }
  // attach
  $(".guildChatTab").on("click", guildChatTabHandler);

  function playerChatBarHandler(event)
  {
      var chat_id = event.data.chat_id;

      if($('#private_chat_content_'+chat_id).is(':visible')) {
        $('.privateChatBar').show();
      } else {
        $('.privateChatBar').hide();
        $('#chat_post_'+chat_id).toggle();
      }
      $('#private_chat_content_'+chat_id).toggle();
      $('#private_chat_form_'+chat_id).toggle();
      $('#private_chat_text_input_'+chat_id).focus();
      scrollToBottom('#private_chat_content_'+chat_id);
  }
</script>
		</div>

		<div class="mainChatView" id='expandedGuildChat' style="background-image: url('https://castleagegame1-a.akamaihd.net/graphics/chat_bubble_bg.gif'); width:365px; height:306px;position:absolute; z-index:100; font-family: Verdana; text-align:left; display:none; margin: 5px 0 0 5px;">
			<div class='chatNotificationCount' style='text-align:center; font-weight:bold;padding:3px 16px 0 9px; width:26px; height:25px; cursor:pointer;' onclick='$(".mainChatView").hide();'>

			</div>
			<div id='chatHeader' style='padding-top:0px; height:35px; padding-bottom:2px;font-weight:bold;'>
				<div style='float:left; width:130px;'>
											<div style='float:left;padding: 8px 0 0 10px;'>
							<img style='height:25px; width:25px;' src="https://castleagegame1-a.akamaihd.net/graphics/guild_symbol_160_10.gif"/>
						</div>
						<div style='float:left;color:white; font-weight:bold; font-size:11px;padding:10px 0 0 5px;'>
							Guild Chat <span id='guildChatActiveMembers'></span>
						</div>
										<div style='clear:both;'></div>
				</div>

				<div style='padding:7px 0 0 140px;'>
		            <div id="main_wall_icon_tab"
		            	 style='background-image: url("https://castleagegame1-a.akamaihd.net/graphics/chat_icon_wall_off.gif");background-repeat:no-repeat;float:left;height:25px;width:70px;text-align:center;cursor:pointer;' 
		                 onMouseOut="hideItemPopup('wall_chat_hover_info',event);return false;"
		                 onMouseOver="showItemPopup('wall_chat_hover_info', this, 43, 10);return false;"
		                >
		                <script>
		                	$( "#main_wall_icon_tab" ).click(function() {
		                		var posting = caPost('wall_chat_log_view.php', {});
		                 		posting.done(function( data ) {
		                 		 	$('#wallAndChatSection').html( data );
		                 		 	$('#expandedGuildChat').toggle();
		                 		 	$('#wallAndChatSection').toggle();
		                 		});
		                	});
		                </script>
		                <div style='padding:5px 0 0 40px;color:#00fc65;font-size:12px;'>
		                    <div style='width:20px;text-align:center;'>
		                        0		                    </div>
		                </div>
		            </div>

		            <div id="main_chat_icon_tab" 
		            	 style='background-image: url("https://castleagegame1-a.akamaihd.net/graphics/chat_icon_chat_off.gif");background-repeat:no-repeat;float:left;height:25px;width:70px;cursor:pointer;text-align:center;' 
		                 onMouseOut="hideItemPopup('player_chat_hover_info',event);return false;"
		                 onMouseOver="showItemPopup('player_chat_hover_info', this, 43, 10);return false;"
		                >
		                <script>
		                	$( "#main_chat_icon_tab" ).click(function() {
		                		var posting = caPost('wall_chat_log_view.php', {mainChatTab:'2'});
		                 		posting.done(function( data ) {
		                 		 	$('#wallAndChatSection').html( data );
		                 		 	$('#expandedGuildChat').toggle();
		                 		 	$('#wallAndChatSection').toggle();
		                 		});
		                	});
		                </script>
		                <div style='padding:5px 0 0 40px;color:#00fc65;font-size:12px;'>
		                    <div style='width:20px;text-align:center;'>
		                        0		                    </div>
		                </div>
		            </div>

		            <div style='background-image: url("https://castleagegame1-a.akamaihd.net/graphics/chat_icon_guild_on.gif");background-repeat:no-repeat;float:left;height:25px;width:70px;text-align:center;' 
		                 onMouseOut="hideItemPopup('player_chat_hover_info',event);return false;"
		                 onMouseOver="showItemPopup('player_chat_hover_info', this, 43, 10);return false;"
		                >
		                <div style='padding:5px 0 0 40px;color:#00fc65;font-size:12px;'>
		                    <div class="chatNotificationCount" style='width:20px;text-align:center;'>
		                    </div>
		                </div>
		            </div>
		        </div>

				<div style='clear:both;'></div>
			</div>

			<div id='chatGuildChat' style='text-align:left; color:white;padding: 0px 10px; font-size:12px; overflow-y:auto;height:200px;width:340px;'>
				<div id='chatGuildChatContainer'>
												<span style='color:#ffc100;'>Guild</span>: There are no guild messages right now, post something!
										</div>
			</div>
			<div id='chatGuildChatTextBox' style='padding:0px;'>
									<div style='padding:0px;'>
						<div style="float:left; width:280px; margin:15px 0 0 10px;">
							<input onkeypress="guildChatHandleKeyPress(event)" id="chatGuildChatTextInput" type="text" style="width:345px;height:18px;background-color:black;color:white;border:none;" />
						</div>
						<div style="clear:both"></div>
					</div>
							</div>
		</div>
			<div style="padding-left:65px;">
            	<div style="float:left;">
					
            	    <div class="mainMenu" style="padding-top:5px;">
	<ul>
			<li
		     onMouseOut="hideList('mainMenu_home');return false;" 
		     onMouseOver="showList('mainMenu_home');return false;"
		><a id='main_menu_home' href="index.php" onclick="ajaxLinkSend('globalContainer', 'index.php'); return false;" ></a>
						<ul id='mainMenu_home' style="display:none">
									
										<li>
						<a href="index.php" onclick="ajaxLinkSend('globalContainer', 'index.php'); return false;" style='color:#00fafd'>
							Main						</a>
					</li>
														
										<li>
						<a href="army_news_feed.php" onclick="ajaxLinkSend('globalContainer', 'army_news_feed.php'); return false;" style='color:#00fafd'>
							News Feeds						</a>
					</li>
														
										<li>
						<a href="crusaders.php" onclick="ajaxLinkSend('globalContainer', 'crusaders.php'); return false;" style='color:#00fafd'>
							Crusaders						</a>
					</li>
														
										<li>
						<a href="daily_bonus_list.php" onclick="ajaxLinkSend('globalContainer', 'daily_bonus_list.php'); return false;" style='color:#00fafd'>
							Daily Bonus						</a>
					</li>
													<div class='bottom'>&nbsp;</div>
			</ul>
					</li>
			<li
		     onMouseOut="hideList('mainMenu_quest');return false;" 
		     onMouseOver="showList('mainMenu_quest');return false;"
		><a id='main_menu_quest' href="quests.php" onclick="ajaxLinkSend('globalContainer', 'quests.php'); return false;" ></a>
						<ul id='mainMenu_quest' style="display:none">
									
										<li>
						<a href="quests.php" onclick="ajaxLinkSend('globalContainer', 'quests.php'); return false;" style='color:#00fafd'>
							Quest						</a>
					</li>
														
										<li>
						<a href="symbolquests.php" onclick="ajaxLinkSend('globalContainer', 'symbolquests.php'); return false;" style='color:#00fafd'>
							Demi Quest						</a>
					</li>
														
										<li>
						<a href="monster_quests.php" onclick="ajaxLinkSend('globalContainer', 'monster_quests.php'); return false;" style='color:#00fafd'>
							Atlantis						</a>
					</li>
														
										<li>
						<a href="festival_home.php" onclick="ajaxLinkSend('globalContainer', 'festival_home.php'); return false;" style='color:#00fafd'>
							Festival						</a>
					</li>
													<div class='bottom'>&nbsp;</div>
			</ul>
					</li>
			<li
		     onMouseOut="hideList('mainMenu_battle');return false;" 
		     onMouseOver="showList('mainMenu_battle');return false;"
		><a id='main_menu_battle' href="battle.php" onclick="ajaxLinkSend('globalContainer', 'battle.php'); return false;" ></a>
						<ul id='mainMenu_battle' style="display:none">
									
										<li>
						<a href="battle.php" onclick="ajaxLinkSend('globalContainer', 'battle.php'); return false;" style='color:#00fafd'>
							Battle						</a>
					</li>
														
										<li>
						<a href="dominion_enter.php" onclick="ajaxLinkSend('globalContainer', 'dominion_enter.php'); return false;" style='color:#00fafd'>
							Dominion						</a>
					</li>
														
										<li>
						<a href="arena.php" onclick="ajaxLinkSend('globalContainer', 'arena.php'); return false;" style='color:#00fafd'>
							Arena VIII						</a>
					</li>
														
										<li>
						<a href="conquest_duel.php" onclick="ajaxLinkSend('globalContainer', 'conquest_duel.php'); return false;" style='color:#00fafd'>
							Conquest Duel						</a>
					</li>
														
										<li>
						<a href="festival_duel_home.php" onclick="ajaxLinkSend('globalContainer', 'festival_duel_home.php'); return false;" style='color:#00fafd'>
							Duel Champion						</a>
					</li>
														
										<li>
						<a href="battlerank.php" onclick="ajaxLinkSend('globalContainer', 'battlerank.php'); return false;" style='color:#00fafd'>
							Battle Rank						</a>
					</li>
														
										<li>
						<a href="war_rank.php" onclick="ajaxLinkSend('globalContainer', 'war_rank.php'); return false;" style='color:#00fafd'>
							War Rank						</a>
					</li>
														
										<li>
						<a href="conquest_battlerank.php" onclick="ajaxLinkSend('globalContainer', 'conquest_battlerank.php'); return false;" style='color:#00fafd'>
							Conquest Rank						</a>
					</li>
													<div class='bottom'>&nbsp;</div>
			</ul>
					</li>
			<li
		     onMouseOut="hideList('mainMenu_monster');return false;" 
		     onMouseOver="showList('mainMenu_monster');return false;"
		><a id='main_menu_monster' href="player_monster_list.php" onclick="ajaxLinkSend('globalContainer', 'player_monster_list.php'); return false;" ></a>
						<ul id='mainMenu_monster' style="display:none">
									
										<li>
						<a href="player_monster_list.php" onclick="ajaxLinkSend('globalContainer', 'player_monster_list.php'); return false;" style='color:#00fafd'>
							Monster List						</a>
					</li>
														
										<li>
						<a href="public_monster_list.php?monster_tier=3" onclick="ajaxLinkSend('globalContainer', 'public_monster_list.php?monster_tier=3'); return false;" style='color:#00fafd'>
							Public List						</a>
					</li>
														
										<li>
						<a href="monster_summon_list.php" onclick="ajaxLinkSend('globalContainer', 'monster_summon_list.php'); return false;" style='color:#00fafd'>
							Summon						</a>
					</li>
														
										<li>
						<a href="army_news_feed.php" onclick="ajaxLinkSend('globalContainer', 'army_news_feed.php'); return false;" style='color:#00fafd'>
							Live Feed						</a>
					</li>
														
										<li>
						<a href="festival_tower.php" onclick="ajaxLinkSend('globalContainer', 'festival_tower.php'); return false;" style='color:#00fafd'>
							Tower I						</a>
					</li>
														
										<li>
						<a href="festival_tower2.php" onclick="ajaxLinkSend('globalContainer', 'festival_tower2.php'); return false;" style='color:#00fafd'>
							Tower II						</a>
					</li>
														
										<li>
						<a href="guildv2_current_monster_battles.php" onclick="ajaxLinkSend('globalContainer', 'guildv2_current_monster_battles.php'); return false;" style='color:#00fafd'>
							Guild Monster						</a>
					</li>
													<div class='bottom'>&nbsp;</div>
			</ul>
					</li>
			<li
		     onMouseOut="hideList('mainMenu_heroes');return false;" 
		     onMouseOver="showList('mainMenu_heroes');return false;"
		><a id='main_menu_heroes' href="generals.php" onclick="ajaxLinkSend('globalContainer', 'generals.php'); return false;" ></a>
						<ul id='mainMenu_heroes' style="display:none">
									
										<li>
						<a href="mercenary.php" onclick="ajaxLinkSend('globalContainer', 'mercenary.php'); return false;" style='color:#00fafd'>
							Heroes						</a>
					</li>
														
										<li>
						<a href="generals.php" onclick="ajaxLinkSend('globalContainer', 'generals.php'); return false;" style='color:#00fafd'>
							Generals						</a>
					</li>
														
										<li>
						<a href="general_alliance.php" onclick="ajaxLinkSend('globalContainer', 'general_alliance.php'); return false;" style='color:#00fafd'>
							General Alliance						</a>
					</li>
													<div class='bottom'>&nbsp;</div>
			</ul>
					</li>
			<li
		     onMouseOut="hideList('mainMenu_town');return false;" 
		     onMouseOver="showList('mainMenu_town');return false;"
		><a id='main_menu_town' href="soldiers.php" onclick="ajaxLinkSend('globalContainer', 'soldiers.php'); return false;" ></a>
						<ul id='mainMenu_town' style="display:none">
									
										<li>
						<a href="trade_market.php" onclick="ajaxLinkSend('globalContainer', 'trade_market.php'); return false;" style='color:#00fafd'>
							Trade Market						</a>
					</li>
														
										<li>
						<a href="soldiers.php" onclick="ajaxLinkSend('globalContainer', 'soldiers.php'); return false;" style='color:#00fafd'>
							Soldiers						</a>
					</li>
														
										<li>
						<a href="item.php" onclick="ajaxLinkSend('globalContainer', 'item.php'); return false;" style='color:#00fafd'>
							Black Smith						</a>
					</li>
														
										<li>
						<a href="magic.php" onclick="ajaxLinkSend('globalContainer', 'magic.php'); return false;" style='color:#00fafd'>
							Magic						</a>
					</li>
														
										<li>
						<a href="land.php" onclick="ajaxLinkSend('globalContainer', 'land.php'); return false;" style='color:#00fafd'>
							Land						</a>
					</li>
														
										<li>
						<a href="conquest_path_shop.php" onclick="ajaxLinkSend('globalContainer', 'conquest_path_shop.php'); return false;" style='color:#00fafd'>
							Emporium						</a>
					</li>
													<div class='bottom'>&nbsp;</div>
			</ul>
					</li>
			<li
		     onMouseOut="hideList('mainMenu_oracle');return false;" 
		     onMouseOver="showList('mainMenu_oracle');return false;"
		><a id='main_menu_oracle' href="oracle.php" onclick="ajaxLinkSend('globalContainer', 'oracle.php'); return false;" ></a>
						<ul id='mainMenu_oracle' style="display:none">
									
										<li>
						<a href="oracle.php" onclick="ajaxLinkSend('globalContainer', 'oracle.php'); return false;" style='color:#00fafd'>
							Oracle						</a>
					</li>
														
										<li>
						<a href="monthly_generals.php" onclick="ajaxLinkSend('globalContainer', 'monthly_generals.php'); return false;" style='color:#00fafd'>
							Favor Generals						</a>
					</li>
														
										<li>
						<a href="reinforcements.php" onclick="ajaxLinkSend('globalContainer', 'reinforcements.php'); return false;" style='color:#00fafd'>
							Reinforcements						</a>
					</li>
														
										<li>
						<a href="symbols.php" onclick="ajaxLinkSend('globalContainer', 'symbols.php'); return false;" style='color:#00fafd'>
							Demi-Power						</a>
					</li>
														
										<li>
						<a href="treasure_chest.php" onclick="ajaxLinkSend('globalContainer', 'treasure_chest.php'); return false;" style='color:#00fafd'>
							Chest						</a>
					</li>
													<div class='bottom'>&nbsp;</div>
			</ul>
					</li>
			<li
		     onMouseOut="hideList('mainMenu_keep');return false;" 
		     onMouseOver="showList('mainMenu_keep');return false;"
		><a id='main_menu_keep' href="keep.php" onclick="ajaxLinkSend('globalContainer', 'keep.php'); return false;" ></a>
						<ul id='mainMenu_keep' style="display:none">
									
										<li>
						<a href="keep.php" onclick="ajaxLinkSend('globalContainer', 'keep.php'); return false;" style='color:#00fafd'>
							Stats						</a>
					</li>
														
										<li>
						<a href="guild_class_power_equipment.php" onclick="ajaxLinkSend('globalContainer', 'guild_class_power_equipment.php'); return false;" style='color:#00fafd'>
							Class						</a>
					</li>
														
										<li>
						<a href="item_archive_bonus.php" onclick="ajaxLinkSend('globalContainer', 'item_archive_bonus.php'); return false;" style='color:#00fafd'>
							Item Archives						</a>
					</li>
														
										<li>
						<a href="item_equip.php" onclick="ajaxLinkSend('globalContainer', 'item_equip.php'); return false;" style='color:#00fafd'>
							Equipment						</a>
					</li>
														
										<li>
						<a href="player_loadouts.php" onclick="ajaxLinkSend('globalContainer', 'player_loadouts.php'); return false;" style='color:#00fafd'>
							Loadouts						</a>
					</li>
														
										<li>
						<a href="alchemy.php" onclick="ajaxLinkSend('globalContainer', 'alchemy.php'); return false;" style='color:#00fafd'>
							Alchemy						</a>
					</li>
														
										<li>
						<a href="goblin_emp.php" onclick="ajaxLinkSend('globalContainer', 'goblin_emp.php'); return false;" style='color:#00fafd'>
							Kobo						</a>
					</li>
														
										<li>
						<a href="forge_item_power.php" onclick="ajaxLinkSend('globalContainer', 'forge_item_power.php'); return false;" style='color:#00fafd'>
							Forge						</a>
					</li>
														
										<li>
						<a href="achievements.php" onclick="ajaxLinkSend('globalContainer', 'achievements.php'); return false;" style='color:#00fafd'>
							Achievements						</a>
					</li>
														
										<li>
						<a href="gift.php" onclick="ajaxLinkSend('globalContainer', 'gift.php'); return false;" style='color:#00fafd'>
							Gift						</a>
					</li>
														
										<li>
						<a href="army.php" onclick="ajaxLinkSend('globalContainer', 'army.php'); return false;" style='color:#00fafd'>
							Army						</a>
					</li>
													<div class='bottom'>&nbsp;</div>
			</ul>
					</li>
			<li
		     onMouseOut="hideList('mainMenu_guild');return false;" 
		     onMouseOver="showList('mainMenu_guild');return false;"
		><a id='main_menu_guild' href="guildv2_home.php" onclick="ajaxLinkSend('globalContainer', 'guildv2_home.php'); return false;" ></a>
						<ul id='mainMenu_guild' style="display:none">
									
										<li>
						<a href="guildv2_home.php" onclick="ajaxLinkSend('globalContainer', 'guildv2_home.php'); return false;" style='color:#00fafd'>
							Home						</a>
					</li>
														
										<li>
						<a href="guildv2_panel.php" onclick="ajaxLinkSend('globalContainer', 'guildv2_panel.php'); return false;" style='color:#00fafd'>
							Manage						</a>
					</li>
														
										<li>
						<a href="guildv2_list.php" onclick="ajaxLinkSend('globalContainer', 'guildv2_list.php'); return false;" style='color:#00fafd'>
							Guild List						</a>
					</li>
														
										<li>
						<a href="guildv2_battle.php" onclick="ajaxLinkSend('globalContainer', 'guildv2_battle.php'); return false;" style='color:#00fafd'>
							Guild Battle						</a>
					</li>
														
										<li>
						<a href="guildv2_monster_summon_list.php" onclick="ajaxLinkSend('globalContainer', 'guildv2_monster_summon_list.php'); return false;" style='color:#00fafd'>
							Guild Monster						</a>
					</li>
														
										<li>
						<a href="guild_priority_mlist.php" onclick="ajaxLinkSend('globalContainer', 'guild_priority_mlist.php'); return false;" style='color:#00fafd'>
							Priority Monster						</a>
					</li>
														
										<li>
						<a href="festival_battle_home.php" onclick="ajaxLinkSend('globalContainer', 'festival_battle_home.php'); return false;" style='color:#00fafd'>
							Festival Battle						</a>
					</li>
														
										<li>
						<a href="guildv2_conquest_command.php?tier=3" onclick="ajaxLinkSend('globalContainer', 'guildv2_conquest_command.php?tier=3'); return false;" style='color:#00fafd'>
							Conquest: Mist						</a>
					</li>
														
										<li>
						<a href="guild_conquest_castle.php?tier=5" onclick="ajaxLinkSend('globalContainer', 'guild_conquest_castle.php?tier=5'); return false;" style='color:#00fafd'>
							Conquest: Earth						</a>
					</li>
														
										<li>
						<a href="guild_achievements.php" onclick="ajaxLinkSend('globalContainer', 'guild_achievements.php'); return false;" style='color:#00fafd'>
							Achievements						</a>
					</li>
													<div class='bottom'>&nbsp;</div>
			</ul>
					</li>
		</ul>
</div>            	</div>
            </div>
        </div>

	<div id="app_body">
		<table class="layout" cellspacing="0" cellpadding="0"><tr><td>
	<div id="results_container" class="results_container" style="display:none"> </div>
	<div id="results_main_wrapper">
        	</div>
 		<div style='display:none;' id="web3_coming_soon">
				<div style="padding:390px 0 0 125px;">
    		<div style="float:left;width:500px;height:390px;">
    			<div style="background-image:url('https://castleagegame1-a.akamaihd.net/graphics/helpmenu_top.jpg');width:500px;height:60px;">
    			    <div style="padding:15px 0 0 36px;">
        			    <div style="float:left;width:395px;height:25px;text-align:center;overflow:hidden;">
            			    <div style="clear:both"></div>
            			    <div style="color:white;font-size:18px;">COMING SOON</div>
            			    <div style="clear:both"></div>
            			</div>
            			<div style="padding:3px 15px 0 0">
                			<div style="float:right">
                			    		<div style='text-align:right;'>
	        <a href="#" onclick="hidePositionBox(); return false;">		
	            <img  src="https://castleagegame1-a.akamaihd.net/graphics/xbtn.png" />
	        </a>
        </div>
                        			</div>
                		</div>
            		</div>
    			</div>
			
    			<div style="background-image:url('https://castleagegame1-a.akamaihd.net/graphics/helpmenu_middle.jpg');width:500px;height:300px;">
    			    <div style="padding:0 0 0 15px;">
                        <div style="float:left;width:470px;height:300px;text-align:left;overflow-y:auto;">
                            <div style="clear:both"></div>
                            <div style="color:black;font-size:16px;font-family:Times New Roman;"><div style="padding:10px;">This feature is coming soon!</div></div>
            			    <div style="clear:both"></div>
            			</div>
        			</div>
    			</div>
            
                <div style="background-image:url('https://castleagegame1-a.akamaihd.net/graphics/helpmenu_bottom.jpg');width:500px;height:30px;overflow:hidden;" ></div>
    		</div>
    	</div>
		</div>    <div style="padding:5px 0 0 5px;">
    	<div style="cursor:help;width:730px;height:146px;text-align:center;background-image:url(https://castleagegame1-a.akamaihd.net/graphics/fb_honor_promoad.jpg);"
    		onClick="PositionAndDisplayPopupAtTop('oracle_promotion', this, '72', '600','noclass'); return false">
    		<div style="padding: 90px 0 0 470px;">
    			<img src="https://castleagegame1-a.akamaihd.net/graphics/promo_btn_viewreward.gif"/>
    		</div>
    				<div style='display:none;' id="oracle_promotion">
			
    		<div style="display:block;width:615px;height:401px;background-image:url(https://castleagegame1-a.akamaihd.net/graphics/fb_promo_honor_popup.jpg);">
    			<div style="padding: 335px 0 0 180px;">
    				<a href="oracle.php" onclick="ajaxLinkSend('globalContainer', 'oracle.php'); return false;" ><img src="https://castleagegame1-a.akamaihd.net/graphics/promo_btn_claim.gif" /></a>	    		</div>
    		</div>
    		</div>    	</div>
    </div>
        
    	
		
		    
    
    

<!-- Bottom Space -->

	
	<table cellspacing="0" cellpadding="0" width="740"><tr>
    <td width="54%" valign="top">
    	            <div id="indexOracleItemSection">
              <div style="padding:5px">
              	<div style="background-image: url('https://castleagegame1-a.akamaihd.net/graphics/treasurechest_9_frontpage.jpg');background-repeat:no-repeat;text-align:left;width:390px;height:396px;color:black;font-family: Times New Roman;">
                      
                      <div style="padding:55px 2px 0 160px;">
                  		<a href="treasure_chest.php?treasure_set=phoenix" onclick="ajaxLinkSend('globalContainer', 'treasure_chest.php?treasure_set=phoenix'); return false;" ><div style="text-align: left; width: 200px; font-size: 13px; height: 75px; color:black;"><br/>Each Treasure Chest Contains a random item, soldier or hero. Some heroes are extremely rare and you can only find them here. Learn More!</div></a>              	    </div>

          			<div style="padding:10px 0 0 115px;float:left;">
              			<div style="height:50px;text-align:left;width:280px;">
              			    <div style="clear:both;"></div>
              				              						<div style="padding-top:8px;">
              							<div style="clear:both;"></div>
              							<div style="float:left;width:20px;font-weight:bold;">1x</div>
              							<div style="padding-left:3px;">
              							    <div style="float:left;width:130px;font-weight:bold;">for 30 Favor Points!</div>
              							</div>
              							<div style="float:left;">
              							    <a href="treasure_chest.php?treasure_set=phoenix&buychoice=210" onclick="ajaxLinkSend('globalContainer', 'treasure_chest.php?treasure_set=phoenix&buychoice=210'); return false;" ><div class='imgButton'><img src='https://castleagegame1-a.akamaihd.net/graphics/treasurechest_7_purchasebtn.gif' /></div></a>              							</div>
              							<div style="clear:both;"></div>
              						</div>
              						              						<div style="padding-top:8px;">
              							<div style="clear:both;"></div>
              							<div style="float:left;width:20px;font-weight:bold;">3x</div>
              							<div style="padding-left:3px;">
              							    <div style="float:left;width:130px;font-weight:bold;">for 80 Favor Points!</div>
              							</div>
              							<div style="float:left;">
              							    <a href="treasure_chest.php?treasure_set=phoenix&buychoice=211" onclick="ajaxLinkSend('globalContainer', 'treasure_chest.php?treasure_set=phoenix&buychoice=211'); return false;" ><div class='imgButton'><img src='https://castleagegame1-a.akamaihd.net/graphics/treasurechest_7_purchasebtn.gif' /></div></a>              							</div>
              							<div style="clear:both;"></div>
              						</div>
              						              			</div>
              		</div>
              		<div style="clear:both;"></div>
              		<div style="padding:14px 0 0 265px;">
              		    <a href="treasure_chest.php?treasure_set=phoenix" onclick="ajaxLinkSend('globalContainer', 'treasure_chest.php?treasure_set=phoenix'); return false;" ><div style='height: 22px;'><img src='https://castleagegame1-a.akamaihd.net/graphics/treasurechest_7_learnbtn.gif' /></div></a>              	    </div>
              		
              		<div style="padding:0px 0 0 265px;">
              		    <a href="treasure_chest.php?treasure_set=conquest" onclick="ajaxLinkSend('globalContainer', 'treasure_chest.php?treasure_set=conquest'); return false;" ><div style='height: 22px;'><img src='https://castleagegame1-a.akamaihd.net/graphics/treasurechest_7_learnbtn.gif' /></div></a>              	    </div>
              		
              		<div style="padding: 0 0 0 265px;">
              		    <a href="treasure_chest.php?treasure_set=wrath" onclick="ajaxLinkSend('globalContainer', 'treasure_chest.php?treasure_set=wrath'); return false;" ><div style='height: 22px;'><img src='https://castleagegame1-a.akamaihd.net/graphics/treasurechest_7_learnbtn.gif' /></div></a>              	    </div>
              		
              		<div style="padding: 0 0 0 265px;">
              		    <a href="treasure_chest.php?treasure_set=ascension" onclick="ajaxLinkSend('globalContainer', 'treasure_chest.php?treasure_set=ascension'); return false;" ><div style='height: 22px;'><img src='https://castleagegame1-a.akamaihd.net/graphics/treasurechest_7_learnbtn.gif' /></div></a>              	    </div>
	
	                    <div style="padding: 0 0 0 265px;">
              		    <a href="treasure_chest.php?treasure_set=annihilator" onclick="ajaxLinkSend('globalContainer', 'treasure_chest.php?treasure_set=annihilator'); return false;" ><div style='height: 22px;'><img src='https://castleagegame1-a.akamaihd.net/graphics/treasurechest_7_learnbtn.gif' /></div></a>              		</div>

                      <div style="padding: 0 0 0 265px;">
              		    <a href="treasure_chest.php?treasure_set=oblivion" onclick="ajaxLinkSend('globalContainer', 'treasure_chest.php?treasure_set=oblivion'); return false;" ><div style='height: 22px;'><img src='https://castleagegame1-a.akamaihd.net/graphics/treasurechest_7_learnbtn.gif' /></div></a>              		</div>
                      
                      <div style="padding: 0 0 0 265px;">
              		    <a href="treasure_chest.php?treasure_set=onslaught" onclick="ajaxLinkSend('globalContainer', 'treasure_chest.php?treasure_set=onslaught'); return false;" ><div style='height: 22px;'><img src='https://castleagegame1-a.akamaihd.net/graphics/treasurechest_7_learnbtn.gif' /></div></a>              		</div>
              	</div>
              </div>
        	</div>
        		        <div class="oracleItemSmallBoxGeneral">
			<div style="height:52px;overflow:hidden;text-align:left;padding:0px 0 0 0px;color:#e6dbe1;font-family:Times New Roman;">
				<div style="float:left;padding:32px 0 0 100px;">
					General
			    </div>
			    			    <div style="clear:both"></div>
			</div>
                  <div style="height:217px;">
          	<div style="width:400px;height:28px;"></div>
            <table width="400">
              <tr>
                <td width="50%" valign="top">
                  <div style="width:100%;padding-left:10px;">
                  	<div style="height:17px;"></div>
                    <div class="special_edition_title">
                      Katherine                    </div>
                    <div class="attdeftext">30 Attack</div>
                    <div class="attdeftext">35 Defense</div>
                    <div class="se_req_text" style="color:#000000;"> Favor Cost: 30 points</div>
                    <div class="se_req_text" style="color:#7a0f08;"> You have : 32 points</div>
                  </div>
                </td>
                <td width="50%" valign="top">
                  <div style="padding-left:10px;padding-top:9px; text-align:left;">
                    <a href="oracle.php" onclick="ajaxLinkSend('globalContainer', 'oracle.php'); return false;" ><img class="imgButton" src="https://castleagegame1-a.akamaihd.net/graphics/hero_katherine.jpg" title="Katherine" width="160" height="160"/></a>                  </div>
                </td>
              </tr>
            </table>
          </div>
          <div style="width:370px;padding-left:24px;text-align:center;font-family:Times New Roman;color:#197B30;height:24px;">
          	 Abilities: Grants Physical Resistance Ability          </div>
          <div style="width:370px;padding-left:24px;text-align:center;">
            <div class="se_desc" style="padding-left:10px;">
              Katherine, the half-sibling to the heir of the throne, has taken it upon herself to become the personal bodyguard to the Queen. She would easily lay her life on the line to protect the throne.            </div>
          </div>
          <div>
            <table width="400" valign="center">
              <tr>
				<td width="100%" align="middle">
					<div style="text-align:center;width:400px;">
						<a href="oracle.php?buychoice=284" onclick="ajaxLinkSend('globalContainer', 'oracle.php?buychoice=284'); return false;" ><img src='https://castleagegame1-a.akamaihd.net/graphics/purchase_button.gif' /></a>					</div>
				</td>
              </tr>
            </table>
          </div>
        </div>
                <div class="oracleItemSmallBoxUnit">
			<div style="height:52px;overflow:hidden;text-align:left;padding:0px 0 0 0px;color:#e6dbe1;font-family:Times New Roman;">
				<div style="float:left;padding:32px 0 0 100px;">
					Unit
			  	</div>
			  				  	<div style="clear:both"></div>
			</div>
                  <div style="height:217px;">
          	<div style="width:400px;height:28px;"></div>
            <table width="400">
              <tr>
                <td width="50%" valign="top">
                  <div style="width:100%;padding-left:10px;">
                  	<div style="height:17px;"></div>
                    <div class="special_edition_title">
                      Queens Prayer                    </div>
                    <div class="attdeftext">22 Attack</div>
                    <div class="attdeftext">28 Defense</div>
                    <div class="se_req_text" style="color:#000000;"> Favor Cost: 25 points</div>
                    <div class="se_req_text" style="color:#7a0f08;"> You have : 32 points</div>
                  </div>
                </td>
                <td width="50%" valign="top">
                  <div style="padding-left:10px;padding-top:9px; text-align:left;">
                    <a href="oracle.php" onclick="ajaxLinkSend('globalContainer', 'oracle.php'); return false;" ><img class="imgButton" src="https://castleagegame1-a.akamaihd.net/graphics/eq_katherine_weapon.jpg" title="Queens Prayer" width="160" height="160"/></a>                  </div>
                </td>
              </tr>
            </table>
          </div>
          <div style="width:370px;padding-left:24px;text-align:center;font-family:Times New Roman;color:#197B30;height:24px;">
          	 +5 Defense to Katherine (not stackable)          </div>
          <div style="width:370px;padding-left:24px;text-align:center;">
            <div class="se_desc" style="padding-left:10px;">
              Bestowed to her by the royal family, the Queens Prayer is a hefty blade carefully crafted to match Katherines advanced skill. Perfectly balanced, the Queens Prayer can signal the end for Katherines foes.            </div>
          </div>
          <div>
            <table width="400" valign="center">
              <tr>
				<td width="100%" align="middle">
					<div style="text-align:center;width:400px;">
						<a href="oracle.php?buychoice=285" onclick="ajaxLinkSend('globalContainer', 'oracle.php?buychoice=285'); return false;" ><img src='https://castleagegame1-a.akamaihd.net/graphics/purchase_button.gif' /></a>					</div>
				</td>
              </tr>
            </table>
          </div>
        </div>
                <div class="oracleItemSmallBoxUnit">
			<div style="height:52px;overflow:hidden;text-align:left;padding:0px 0 0 0px;color:#e6dbe1;font-family:Times New Roman;">
				<div style="float:left;padding:32px 0 0 100px;">
					Unit
			  	</div>
			  				  	<div style="clear:both"></div>
			</div>
                  <div style="height:217px;">
          	<div style="width:400px;height:28px;"></div>
            <table width="400">
              <tr>
                <td width="50%" valign="top">
                  <div style="width:100%;padding-left:10px;">
                  	<div style="height:17px;"></div>
                    <div class="special_edition_title">
                      Queens Grace                    </div>
                    <div class="attdeftext">22 Attack</div>
                    <div class="attdeftext">25 Defense</div>
                    <div class="se_req_text" style="color:#000000;"> Favor Cost: 25 points</div>
                    <div class="se_req_text" style="color:#7a0f08;"> You have : 32 points</div>
                  </div>
                </td>
                <td width="50%" valign="top">
                  <div style="padding-left:10px;padding-top:9px; text-align:left;">
                    <a href="oracle.php" onclick="ajaxLinkSend('globalContainer', 'oracle.php'); return false;" ><img class="imgButton" src="https://castleagegame1-a.akamaihd.net/graphics/eq_katherine_amulet.jpg" title="Queens Grace" width="160" height="160"/></a>                  </div>
                </td>
              </tr>
            </table>
          </div>
          <div style="width:370px;padding-left:24px;text-align:center;font-family:Times New Roman;color:#197B30;height:24px;">
          	 +5 Defense to Katherine (not stackable)          </div>
          <div style="width:370px;padding-left:24px;text-align:center;">
            <div class="se_desc" style="padding-left:10px;">
              A gift from her half-sister, the ring carries a special enchantment that allows Katherine to immediately teleport to her siblings side at a moments notice.             </div>
          </div>
          <div>
            <table width="400" valign="center">
              <tr>
				<td width="100%" align="middle">
					<div style="text-align:center;width:400px;">
						<a href="oracle.php?buychoice=286" onclick="ajaxLinkSend('globalContainer', 'oracle.php?buychoice=286'); return false;" ><img src='https://castleagegame1-a.akamaihd.net/graphics/purchase_button.gif' /></a>					</div>
				</td>
              </tr>
            </table>
          </div>
        </div>
                <div class="oracleItemSmallBoxUnit">
			<div style="height:52px;overflow:hidden;text-align:left;padding:0px 0 0 0px;color:#e6dbe1;font-family:Times New Roman;">
				<div style="float:left;padding:32px 0 0 100px;">
					Unit
			  	</div>
			  				  	<div style="clear:both"></div>
			</div>
                  <div style="height:217px;">
          	<div style="width:400px;height:28px;"></div>
            <table width="400">
              <tr>
                <td width="50%" valign="top">
                  <div style="width:100%;padding-left:10px;">
                  	<div style="height:17px;"></div>
                    <div class="special_edition_title">
                      Royal Armlet                    </div>
                    <div class="attdeftext">13 Attack</div>
                    <div class="attdeftext">16 Defense</div>
                    <div class="se_req_text" style="color:#000000;"> Favor Cost: 25 points</div>
                    <div class="se_req_text" style="color:#7a0f08;"> You have : 32 points</div>
                  </div>
                </td>
                <td width="50%" valign="top">
                  <div style="padding-left:10px;padding-top:9px; text-align:left;">
                    <a href="oracle.php" onclick="ajaxLinkSend('globalContainer', 'oracle.php'); return false;" ><img class="imgButton" src="https://castleagegame1-a.akamaihd.net/graphics/eq_katherine_gauntlet.jpg" title="Royal Armlet" width="160" height="160"/></a>                  </div>
                </td>
              </tr>
            </table>
          </div>
          <div style="width:370px;padding-left:24px;text-align:center;font-family:Times New Roman;color:#197B30;height:24px;">
          	 +5 Defense to Katherine (not stackable)          </div>
          <div style="width:370px;padding-left:24px;text-align:center;">
            <div class="se_desc" style="padding-left:10px;">
              Worn by all in the Royal Guard, the armlet is a symbol of prestige and allows Katherine and the Royal Guard access to the most well-guarded places in Valeria.            </div>
          </div>
          <div>
            <table width="400" valign="center">
              <tr>
				<td width="100%" align="middle">
					<div style="text-align:center;width:400px;">
						<a href="oracle.php?buychoice=287" onclick="ajaxLinkSend('globalContainer', 'oracle.php?buychoice=287'); return false;" ><img src='https://castleagegame1-a.akamaihd.net/graphics/purchase_button.gif' /></a>					</div>
				</td>
              </tr>
            </table>
          </div>
        </div>
              </div>

    </td>
    <td width="46%" valign="top">
        	
	  	  
    
	        <div style="padding:5px 0 0 5px;">
    	    <div onclick="ajaxLinkSend('globalContainer', 'monster_summon_list.php'); return false;" style="background-image:url('https://castleagegame1-a.akamaihd.net/graphics/leviathan_fbad.jpg');width:332px;height:234px;font-weight:bold;cursor:pointer;">

    	    </div>
    	</div>
    
	
	
	
	
		
	
    
	
		    <div style="padding:5px 0 0 5px;">
		    <div style="background-image:url('https://castleagegame1-a.akamaihd.net/graphics/pri_homepage.jpg');width:338px;height:166px;font-weight:bold;">
		        <div style="clear:both"></div>
                    <div style='float:left;width:140px;height:166px;'>
                        <div style='width:140px;height:125px;'>
                            <div style="padding:15px 0 0 20px;">
                                <img style='width:110px;' src="https://castleagegame1-a.akamaihd.net/graphics/guild_symbol_banner_10_left.jpg" />
                            </div>
                        </div> 
                        <div style='width:140px;height:15px;'>
                            <div style="padding:8px 0 0 17px;">
                                <a href="guild_priority_mlist.php" onclick="ajaxLinkSend('globalContainer', 'guild_priority_mlist.php'); return false;" ><img src="https://castleagegame1-a.akamaihd.net/graphics/pri_btn_primonster.gif"/></a>                            </div>
                        </div>
                    </div>
                    
                    <div style='float:left;width:195px;height:166px;'>
                        <div style='width:195px;height:125px;'>
                            <div style="padding:14px 0 0 9px;">
                                <div style='width:174px;height:110px;text-align:center;'>
                                    <img src="https://castleagegame1-a.akamaihd.net/graphics/pri_placeholder.jpg" style="height:100%;" />
                                </div>
                                <div style='margin:-23px 0 0 8px;text-align:center;'>
                                    <div style='width:159px;height:20px;text-align:center;color:#787878;'>
                                        NO PRIORITY
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div style='width:195px;height:30px;color:white;font-size:11px;'>
                            <div style="clear:both"></div>
                            <div style='float:left;width:35px;height:30px;'>
                                <div style="padding:9px 0 0 16px;">
                                    <img src="https://castleagegame1-a.akamaihd.net/graphics/pri_icon_ppl.jpg" />
                                </div>
                            </div>
                            <div style='float:left;width:60px;height:30px;'>
                                <div style="padding:10px 0 0 0;">
                                    -
                                </div>
                            </div>
                            <div style='float:left;width:18px;height:30px;'>
                                <div style="padding:8px 0 0 0;">
                                    <img src="https://castleagegame1-a.akamaihd.net/graphics/pri_icon_time.jpg" />
                                </div>
                            </div>
                            <div style='float:left;width:70px;height:30px;'>
                                <div style="padding:10px 0 0 0;">
                                    -
                                </div>
                            </div>
                            <div style="clear:both"></div>
                        </div>
                        
                    </div>
                <div style="clear:both"></div>
		    </div>
		</div>
    
		<div style="padding:5px 0 0 5px;">
		<div style="background-image:url('https://castleagegame1-a.akamaihd.net/graphics/fridayad.jpg');-webkit-background-size:338px 166px;width:338px;height:166px;">
			<div style="float:left;width:95px;height:100%;">
				<div style="width:48px;height:48px;margin:80px 0px 0px 26px;-webkit-border-radius:22px;overflow:hidden;">
									</div>
			</div>
			<div style="float:left;width:243px;height:100%;">
				<div style="margin:50px 0px 0px 2px;width:235px;height:92px;">
					<div style="width:215px;height:75px;padding:10px 0px 0px 8px;"><b>Friday Bonus</b><br />Double skill points per Demi Pray</div>
				</div>
				<div style="width:109px;height:19px;margin-left:63px;">
					<a href="daily_bonus_list.php" onclick="ajaxLinkSend('globalContainer', 'daily_bonus_list.php'); return false;" ><img src="https://castleagegame1-a.akamaihd.net/graphics/daily_btn_view.gif"/></a>				</div>
			</div>
		</div>
	</div>
	
	    	<div id="newsFeedSection" style="padding:4px 0 0 5px;">
        	
<div style="height:755px;width:338px;background-image:url('https://castleagegame1-a.akamaihd.net/graphics/news_container_long.jpg');background-repeat:no-repeat;">
        
        <div style="width:339px;height:40px">
            <div style="clear:both;"></div>
            <div style="width:120px;height:40px;float:left;">
                <div style="padding:14px 0 0 30px;">
                    <img class='imgButton' 
                         style="cursor:pointer;"
                         src='https://castleagegame1-a.akamaihd.net/graphics/news_tab_news_on.jpg' 
                         onclick="switchNewsFeed('news');"
                         />
                </div>
            </div>
            <div style="width:96px;height:40px;float:left;">
                <div style="padding:14px 0 0 4px;">
                    <img class='imgButton' 
                         style="cursor:pointer;"
                         src='https://castleagegame1-a.akamaihd.net/graphics/news_tab_allies_off.jpg' 
                         onclick="switchNewsFeed('allies');"
                         />

                </div>
            </div>
            <div style="width:120px;height:40px;float:left;">
                <div style="padding:14px 0 0 1px;">
                    <img class='imgButton'
                         style="cursor:pointer;"
                         src='https://castleagegame1-a.akamaihd.net/graphics/news_tab_mon_off.jpg' 
                         onclick="switchNewsFeed('monster');"
                         />
                </div>
            </div>
            <div style="clear:both;"></div>
        </div>
        
        <div style="width:338px;height:700px">
            <div style="padding:0 0 0 17px;">
                
                <div style="width:320px;height:685px;overflow:hidden;font-size:12px;">
                    <div style="padding:0 0 0 4px;">
    <div style="height:101px;width:297px;background-image:url('https://castleagegame1-a.akamaihd.net/graphics/news_newscontainer.gif');background-repeat:no-repeat;font-size:12px;">
    
        <div style="width:297px;height:35px;">
            <div style="width:200px;height:35px;float:left;font-weight:bold;">
                <div style="padding:4px 0 0 60px;">
                    <span style="color:#6a3c0a;">NEWS HEADLINE:</span><br/>
                    May 12, 2014                </div>
             </div>
             <div style="width:97px;height:35px;float:left;">
                 <div style="padding:13px 0 0 10px;">
                    <a href="news.php" onclick="ajaxLinkSend('globalContainer', 'news.php'); return false;" ><img src='https://castleagegame1-a.akamaihd.net/graphics/news_btn_morenews.gif' /></a>                 </div>
              </div>
        </div>
    
        <div style="width:297px;height:60px;">
            <div style="padding:10px 0 0 20px;">
                <div style="width:270px;height:50px;overflow:hidden;">
                    For the latest game updates, see:<a href="news.php" onclick="ajaxLinkSend('globalContainer', 'news.php'); return false;" ><span style='font-size:12px'>(more...)</span></a>                </div>
            </div>
        </div>
    
    </div>
</div>

<div style="width:316px;height:20px;overflow:hidden;">
    <div style="padding-left:150px;">
                (<a href="index.php?alerts=delete" onclick="ajaxLinkSend('globalContainer', 'index.php?alerts=delete'); return false;" >Clear Battle News!</a>)
    </div>
</div >
                        
<div style="width:316px;height:570px;overflow-y:auto;overflow-x:hidden;">
    <div style="width:297px;height:10px;"></div>
    
			<div style="height:35px;width:297px;background-image:url('https://castleagegame1-a.akamaihd.net/graphics/news_topcontainer.jpg');background-repeat:no-repeat;">
			    <div style="width:50px;height:50px;float:left;">
			        <div style="margin-top:-10px;">
			            <img src='https://castleagegame1-a.akamaihd.net/graphics/achivement_tabicons_loe.gif' height="50px" width="50px" />
			        </div>
			    </div>

			    <div style="width:160px;height:35px;float:left;font-weight:bold;color:#6a3c0a;text-align:center;">
			        <div style="padding:2px 0 0 5px;">
			            Conquest Earth status:<br/>
			            <span style='color:#9e0e13'>
							BATTLE: 15h 20m 						</span>
					</div>
			    </div>

				<div style="width:80px;height:35px;float:left;">
			        <div style="padding:8px 0 0 3px;">
			           <a href="guildv2_conquest_expansion.php?guild_id=100003851490194_1340565613&slot=0" onclick="ajaxLinkSend('globalContainer', 'guildv2_conquest_expansion.php?guild_id=100003851490194_1340565613&slot=0'); return false;" ><img src='https://castleagegame1-a.akamaihd.net/graphics/news_btn_enter.gif' /></a>			        </div>
			    </div>
			</div>

    <div style="width:297px;height:20px;"></div>

            <div style="height:35px;width:297px;background-image:url('https://castleagegame1-a.akamaihd.net/graphics/news_topcontainer.jpg');background-repeat:no-repeat;">
            <div style="width:50px;height:50px;float:left;">
                <div style="margin-top:-10px;">
                    <img src='https://castleagegame1-a.akamaihd.net/graphics/achivement_tabicons_fest_guild_battle.gif' height="50px" width="50px" />
                </div>
            </div>
        
            <div style="width:160px;height:35px;float:left;font-weight:bold;color:#6a3c0a;text-align:center;">
                <div style="padding:2px 0 0 5px;">
                    Festival Battle status:<br/>
                    <span style='color:black'>
                                					BATTLE NOW!
        				    				</span>
				</div>
		    </div>
		
			<div style="width:80px;height:35px;float:left;">
                <div style="padding:8px 0 0 3px;">
                	 
                   <a href="festival_duel_home.php" onclick="ajaxLinkSend('globalContainer', 'festival_duel_home.php'); return false;" ><img src='https://castleagegame1-a.akamaihd.net/graphics/news_btn_enter.gif' /></a>                </div>
            </div>
        </div>
    
        		<div style="width:297px;height:15px;"></div>
    		<div style="height:29px;width:297px;background-image:url('https://castleagegame1-a.akamaihd.net/graphics/news_innercontainer_top.gif');background-repeat:no-repeat;font-weight:bold;">
    		    <div style="width:35px;height:25px;float:left;">
    		        <div style="padding-left:5px;">
                        <img src='https://castleagegame1-a.akamaihd.net/graphics/achivement_tabicons_conquest_duel_rank.gif' height="25" width="25" />
                    </div>
                </div>
        
                <div style="width:170px;height:25px;float:left;">
                    <div style="padding:5px 0 0 0;">
                        <span style="color:#A30000">Defeat!</span> 1h 56m ago:
                    </div>
                </div>
                <div style="width:80px;height:25px;float:left;">
                    <div style="padding:4px 0 0 8px;">
                                                    <a href="guildv2_conquest_command.php" onclick="ajaxLinkSend('globalContainer', 'guildv2_conquest_command.php'); return false;" ><img src='https://castleagegame1-a.akamaihd.net/graphics/news_btn_revenge.gif' /></a>                                            </div>
                </div>
    		</div>
    		    		        <div style="width:297px;background-image:url('https://castleagegame1-a.akamaihd.net/graphics/news_innercontainer_mid.gif');background-repeat:y-repeat;">
    		            <div style="padding:2px 0 3px 15px;">
    				        <div style="width:275px;">
                                Conquest Battle! You engaged in multiple battles against <a href="keep.php?casuser=100006092910345" onclick="ajaxLinkSend('globalContainer', 'keep.php?casuser=100006092910345'); return false;" >Lothar</a>!<br/>
                                <strong>You won 0 times and lost 10 times. </strong>
                                <span id="expandButton_100006092910345_4" onclick="styleDisplay('battle_messages_100006092910345_4','block');styleDisplay('expandButton_100006092910345_4','none');styleDisplay('collapseButton_100006092910345_4','block');"><a href="#">[+]</a></span>
                                <span id="collapseButton_100006092910345_4" style="display:none"  onclick="styleDisplay('battle_messages_100006092910345_4','none');styleDisplay('expandButton_100006092910345_4','block');styleDisplay('collapseButton_100006092910345_4','none');"><a href="#">[-]</a></span>
                            </div>
    				    </div>
    				</div>
    		    		<div id="battle_messages_100006092910345_4" style="display:none">
    		    			<div style="width:297px;background-image:url('https://castleagegame1-a.akamaihd.net/graphics/news_innercontainer_mid.gif');background-repeat:y-repeat;">
    			    <div style="padding:2px 0 3px 15px;">
    			        <div style="width:275px;">    						        
    			            <a href="keep.php?casuser=100006092910345" onclick="ajaxLinkSend('globalContainer', 'keep.php?casuser=100006092910345'); return false;" >Lothar</a> has performed the special action, <span style='color:#7E2217;'>Whirlwind</span>, on you! <a href=" guildv2_conquest_expansion.php?slot=0&guild_id=100003851490194_1340565613" onclick="ajaxLinkSend('globalContainer', ' guildv2_conquest_expansion.php?slot=0&guild_id=100003851490194_1340565613'); return false;" >Goto Conquest Battle!</a>    			        </div>
    			    </div>
    			</div>
    		    			<div style="width:297px;background-image:url('https://castleagegame1-a.akamaihd.net/graphics/news_innercontainer_mid.gif');background-repeat:y-repeat;">
    			    <div style="padding:2px 0 3px 15px;">
    			        <div style="width:275px;">    						        
    			            <a href="keep.php?casuser=100006092910345" onclick="ajaxLinkSend('globalContainer', 'keep.php?casuser=100006092910345'); return false;" >Lothar</a> has performed the special action, <span style='color:#7E2217;'>Whirlwind</span>, on you! <a href=" guildv2_conquest_expansion.php?slot=0&guild_id=100003851490194_1340565613" onclick="ajaxLinkSend('globalContainer', ' guildv2_conquest_expansion.php?slot=0&guild_id=100003851490194_1340565613'); return false;" >Goto Conquest Battle!</a>    			        </div>
    			    </div>
    			</div>
    		    			<div style="width:297px;background-image:url('https://castleagegame1-a.akamaihd.net/graphics/news_innercontainer_mid.gif');background-repeat:y-repeat;">
    			    <div style="padding:2px 0 3px 15px;">
    			        <div style="width:275px;">    						        
    			            <a href="keep.php?casuser=100006092910345" onclick="ajaxLinkSend('globalContainer', 'keep.php?casuser=100006092910345'); return false;" >Lothar</a> has performed the special action, <span style='color:#7E2217;'>Whirlwind</span>, on you! <a href=" guildv2_conquest_expansion.php?slot=0&guild_id=100003851490194_1340565613" onclick="ajaxLinkSend('globalContainer', ' guildv2_conquest_expansion.php?slot=0&guild_id=100003851490194_1340565613'); return false;" >Goto Conquest Battle!</a>    			        </div>
    			    </div>
    			</div>
    		    			<div style="width:297px;background-image:url('https://castleagegame1-a.akamaihd.net/graphics/news_innercontainer_mid.gif');background-repeat:y-repeat;">
    			    <div style="padding:2px 0 3px 15px;">
    			        <div style="width:275px;">    						        
    			            <a href="keep.php?casuser=100006092910345" onclick="ajaxLinkSend('globalContainer', 'keep.php?casuser=100006092910345'); return false;" >Lothar</a> has performed the special action, <span style='color:#7E2217;'>Whirlwind</span>, on you! <a href=" guildv2_conquest_expansion.php?slot=0&guild_id=100003851490194_1340565613" onclick="ajaxLinkSend('globalContainer', ' guildv2_conquest_expansion.php?slot=0&guild_id=100003851490194_1340565613'); return false;" >Goto Conquest Battle!</a>    			        </div>
    			    </div>
    			</div>
    		    			<div style="width:297px;background-image:url('https://castleagegame1-a.akamaihd.net/graphics/news_innercontainer_mid.gif');background-repeat:y-repeat;">
    			    <div style="padding:2px 0 3px 15px;">
    			        <div style="width:275px;">    						        
    			            <a href="keep.php?casuser=100006092910345" onclick="ajaxLinkSend('globalContainer', 'keep.php?casuser=100006092910345'); return false;" >Lothar</a> has performed the special action, <span style='color:#7E2217;'>Whirlwind</span>, on you! <a href=" guildv2_conquest_expansion.php?slot=0&guild_id=100003851490194_1340565613" onclick="ajaxLinkSend('globalContainer', ' guildv2_conquest_expansion.php?slot=0&guild_id=100003851490194_1340565613'); return false;" >Goto Conquest Battle!</a>    			        </div>
    			    </div>
    			</div>
    		    			<div style="width:297px;background-image:url('https://castleagegame1-a.akamaihd.net/graphics/news_innercontainer_mid.gif');background-repeat:y-repeat;">
    			    <div style="padding:2px 0 3px 15px;">
    			        <div style="width:275px;">    						        
    			            <a href="keep.php?casuser=100006092910345" onclick="ajaxLinkSend('globalContainer', 'keep.php?casuser=100006092910345'); return false;" >Lothar</a> has performed the special action, <span style='color:#7E2217;'>Whirlwind</span>, on you! <a href=" guildv2_conquest_expansion.php?slot=0&guild_id=100003851490194_1340565613" onclick="ajaxLinkSend('globalContainer', ' guildv2_conquest_expansion.php?slot=0&guild_id=100003851490194_1340565613'); return false;" >Goto Conquest Battle!</a>    			        </div>
    			    </div>
    			</div>
    		    			<div style="width:297px;background-image:url('https://castleagegame1-a.akamaihd.net/graphics/news_innercontainer_mid.gif');background-repeat:y-repeat;">
    			    <div style="padding:2px 0 3px 15px;">
    			        <div style="width:275px;">    						        
    			            <a href="keep.php?casuser=100006092910345" onclick="ajaxLinkSend('globalContainer', 'keep.php?casuser=100006092910345'); return false;" >Lothar</a> has performed the special action, <span style='color:#7E2217;'>Whirlwind</span>, on you! <a href=" guildv2_conquest_expansion.php?slot=0&guild_id=100003851490194_1340565613" onclick="ajaxLinkSend('globalContainer', ' guildv2_conquest_expansion.php?slot=0&guild_id=100003851490194_1340565613'); return false;" >Goto Conquest Battle!</a>    			        </div>
    			    </div>
    			</div>
    		    			<div style="width:297px;background-image:url('https://castleagegame1-a.akamaihd.net/graphics/news_innercontainer_mid.gif');background-repeat:y-repeat;">
    			    <div style="padding:2px 0 3px 15px;">
    			        <div style="width:275px;">    						        
    			            <a href="keep.php?casuser=100006092910345" onclick="ajaxLinkSend('globalContainer', 'keep.php?casuser=100006092910345'); return false;" >Lothar</a> has performed the special action, <span style='color:#7E2217;'>Whirlwind</span>, on you! <a href=" guildv2_conquest_expansion.php?slot=0&guild_id=100003851490194_1340565613" onclick="ajaxLinkSend('globalContainer', ' guildv2_conquest_expansion.php?slot=0&guild_id=100003851490194_1340565613'); return false;" >Goto Conquest Battle!</a>    			        </div>
    			    </div>
    			</div>
    		    			<div style="width:297px;background-image:url('https://castleagegame1-a.akamaihd.net/graphics/news_innercontainer_mid.gif');background-repeat:y-repeat;">
    			    <div style="padding:2px 0 3px 15px;">
    			        <div style="width:275px;">    						        
    			            <a href="keep.php?casuser=100006092910345" onclick="ajaxLinkSend('globalContainer', 'keep.php?casuser=100006092910345'); return false;" >Lothar</a> has performed the special action, <span style='color:#7E2217;'>Whirlwind</span>, on you! <a href=" guildv2_conquest_expansion.php?slot=0&guild_id=100003851490194_1340565613" onclick="ajaxLinkSend('globalContainer', ' guildv2_conquest_expansion.php?slot=0&guild_id=100003851490194_1340565613'); return false;" >Goto Conquest Battle!</a>    			        </div>
    			    </div>
    			</div>
    		    			<div style="width:297px;background-image:url('https://castleagegame1-a.akamaihd.net/graphics/news_innercontainer_mid.gif');background-repeat:y-repeat;">
    			    <div style="padding:2px 0 3px 15px;">
    			        <div style="width:275px;">    						        
    			            <a href="keep.php?casuser=100006092910345" onclick="ajaxLinkSend('globalContainer', 'keep.php?casuser=100006092910345'); return false;" >Lothar</a> has performed the special action, <span style='color:#7E2217;'>Whirlwind</span>, on you! <a href=" guildv2_conquest_expansion.php?slot=0&guild_id=100003851490194_1340565613" onclick="ajaxLinkSend('globalContainer', ' guildv2_conquest_expansion.php?slot=0&guild_id=100003851490194_1340565613'); return false;" >Goto Conquest Battle!</a>    			        </div>
    			    </div>
    			</div>
    		    		</div>
    			<div style="height:7px;width:297px;background-image:url('https://castleagegame1-a.akamaihd.net/graphics/news_innercontainer_bot.gif');background-repeat:no-repeat;">&nbsp;</div>
    		<div style="width:297px;height:15px;"></div>
    		<div style="height:29px;width:297px;background-image:url('https://castleagegame1-a.akamaihd.net/graphics/news_innercontainer_top.gif');background-repeat:no-repeat;font-weight:bold;">
    		    <div style="width:35px;height:25px;float:left;">
    		        <div style="padding-left:5px;">
                        <img src='https://castleagegame1-a.akamaihd.net/graphics/achivement_tabicons_conquest_duel_rank.gif' height="25" width="25" />
                    </div>
                </div>
        
                <div style="width:170px;height:25px;float:left;">
                    <div style="padding:5px 0 0 0;">
                        <span style="color:#A30000">Defeat!</span> 1h 59m ago:
                    </div>
                </div>
                <div style="width:80px;height:25px;float:left;">
                    <div style="padding:4px 0 0 8px;">
                                                    <a href="guildv2_conquest_command.php" onclick="ajaxLinkSend('globalContainer', 'guildv2_conquest_command.php'); return false;" ><img src='https://castleagegame1-a.akamaihd.net/graphics/news_btn_revenge.gif' /></a>                                            </div>
                </div>
    		</div>
    		    		        <div style="width:297px;background-image:url('https://castleagegame1-a.akamaihd.net/graphics/news_innercontainer_mid.gif');background-repeat:y-repeat;">
    		            <div style="padding:2px 0 3px 15px;">
    				        <div style="width:275px;">
                                Conquest Battle! You engaged in multiple battles against <a href="keep.php?casuser=100001655216535" onclick="ajaxLinkSend('globalContainer', 'keep.php?casuser=100001655216535'); return false;" >Exodie</a>!<br/>
                                <strong>You won 0 times and lost 7 times. </strong>
                                <span id="expandButton_100001655216535_4" onclick="styleDisplay('battle_messages_100001655216535_4','block');styleDisplay('expandButton_100001655216535_4','none');styleDisplay('collapseButton_100001655216535_4','block');"><a href="#">[+]</a></span>
                                <span id="collapseButton_100001655216535_4" style="display:none"  onclick="styleDisplay('battle_messages_100001655216535_4','none');styleDisplay('expandButton_100001655216535_4','block');styleDisplay('collapseButton_100001655216535_4','none');"><a href="#">[-]</a></span>
                            </div>
    				    </div>
    				</div>
    		    		<div id="battle_messages_100001655216535_4" style="display:none">
    		    			<div style="width:297px;background-image:url('https://castleagegame1-a.akamaihd.net/graphics/news_innercontainer_mid.gif');background-repeat:y-repeat;">
    			    <div style="padding:2px 0 3px 15px;">
    			        <div style="width:275px;">    						        
    			            You were <span style='color:#7E2217;'>DEFEATED</span> in a Conquest Battle against <a href="keep.php?casuser=100001655216535" onclick="ajaxLinkSend('globalContainer', 'keep.php?casuser=100001655216535'); return false;" >Exodie's</a> taking <strong>95 damage</strong>! <a href=" guildv2_conquest_expansion.php?slot=0&guild_id=100003851490194_1340565613" onclick="ajaxLinkSend('globalContainer', ' guildv2_conquest_expansion.php?slot=0&guild_id=100003851490194_1340565613'); return false;" >Goto Conquest Battle!</a>    			        </div>
    			    </div>
    			</div>
    		    			<div style="width:297px;background-image:url('https://castleagegame1-a.akamaihd.net/graphics/news_innercontainer_mid.gif');background-repeat:y-repeat;">
    			    <div style="padding:2px 0 3px 15px;">
    			        <div style="width:275px;">    						        
    			            You were <span style='color:#7E2217;'>DEFEATED</span> in a Conquest Battle against <a href="keep.php?casuser=100001655216535" onclick="ajaxLinkSend('globalContainer', 'keep.php?casuser=100001655216535'); return false;" >Exodie's</a> taking <strong>98 damage</strong>! <a href=" guildv2_conquest_expansion.php?slot=0&guild_id=100003851490194_1340565613" onclick="ajaxLinkSend('globalContainer', ' guildv2_conquest_expansion.php?slot=0&guild_id=100003851490194_1340565613'); return false;" >Goto Conquest Battle!</a>    			        </div>
    			    </div>
    			</div>
    		    			<div style="width:297px;background-image:url('https://castleagegame1-a.akamaihd.net/graphics/news_innercontainer_mid.gif');background-repeat:y-repeat;">
    			    <div style="padding:2px 0 3px 15px;">
    			        <div style="width:275px;">    						        
    			            You were <span style='color:#7E2217;'>DEFEATED</span> in a Conquest Battle against <a href="keep.php?casuser=100001655216535" onclick="ajaxLinkSend('globalContainer', 'keep.php?casuser=100001655216535'); return false;" >Exodie's</a> taking <strong>125 damage</strong>! <a href=" guildv2_conquest_expansion.php?slot=0&guild_id=100003851490194_1340565613" onclick="ajaxLinkSend('globalContainer', ' guildv2_conquest_expansion.php?slot=0&guild_id=100003851490194_1340565613'); return false;" >Goto Conquest Battle!</a>    			        </div>
    			    </div>
    			</div>
    		    			<div style="width:297px;background-image:url('https://castleagegame1-a.akamaihd.net/graphics/news_innercontainer_mid.gif');background-repeat:y-repeat;">
    			    <div style="padding:2px 0 3px 15px;">
    			        <div style="width:275px;">    						        
    			            You were <span style='color:#7E2217;'>DEFEATED</span> in a Conquest Battle against <a href="keep.php?casuser=100001655216535" onclick="ajaxLinkSend('globalContainer', 'keep.php?casuser=100001655216535'); return false;" >Exodie's</a> taking <strong>125 damage</strong>! <a href=" guildv2_conquest_expansion.php?slot=0&guild_id=100003851490194_1340565613" onclick="ajaxLinkSend('globalContainer', ' guildv2_conquest_expansion.php?slot=0&guild_id=100003851490194_1340565613'); return false;" >Goto Conquest Battle!</a>    			        </div>
    			    </div>
    			</div>
    		    			<div style="width:297px;background-image:url('https://castleagegame1-a.akamaihd.net/graphics/news_innercontainer_mid.gif');background-repeat:y-repeat;">
    			    <div style="padding:2px 0 3px 15px;">
    			        <div style="width:275px;">    						        
    			            You were <span style='color:#7E2217;'>DEFEATED</span> in a Conquest Battle against <a href="keep.php?casuser=100001655216535" onclick="ajaxLinkSend('globalContainer', 'keep.php?casuser=100001655216535'); return false;" >Exodie's</a> taking <strong>123 damage</strong>! <a href=" guildv2_conquest_expansion.php?slot=0&guild_id=100003851490194_1340565613" onclick="ajaxLinkSend('globalContainer', ' guildv2_conquest_expansion.php?slot=0&guild_id=100003851490194_1340565613'); return false;" >Goto Conquest Battle!</a>    			        </div>
    			    </div>
    			</div>
    		    			<div style="width:297px;background-image:url('https://castleagegame1-a.akamaihd.net/graphics/news_innercontainer_mid.gif');background-repeat:y-repeat;">
    			    <div style="padding:2px 0 3px 15px;">
    			        <div style="width:275px;">    						        
    			            You were <span style='color:#7E2217;'>DEFEATED</span> in a Conquest Battle against <a href="keep.php?casuser=100001655216535" onclick="ajaxLinkSend('globalContainer', 'keep.php?casuser=100001655216535'); return false;" >Exodie's</a> taking <strong>109 damage</strong>! <a href=" guildv2_conquest_expansion.php?slot=0&guild_id=100003851490194_1340565613" onclick="ajaxLinkSend('globalContainer', ' guildv2_conquest_expansion.php?slot=0&guild_id=100003851490194_1340565613'); return false;" >Goto Conquest Battle!</a>    			        </div>
    			    </div>
    			</div>
    		    			<div style="width:297px;background-image:url('https://castleagegame1-a.akamaihd.net/graphics/news_innercontainer_mid.gif');background-repeat:y-repeat;">
    			    <div style="padding:2px 0 3px 15px;">
    			        <div style="width:275px;">    						        
    			            You were <span style='color:#7E2217;'>DEFEATED</span> in a Conquest Battle against <a href="keep.php?casuser=100001655216535" onclick="ajaxLinkSend('globalContainer', 'keep.php?casuser=100001655216535'); return false;" >Exodie's</a> taking <strong>95 damage</strong>! <a href=" guildv2_conquest_expansion.php?slot=0&guild_id=100003851490194_1340565613" onclick="ajaxLinkSend('globalContainer', ' guildv2_conquest_expansion.php?slot=0&guild_id=100003851490194_1340565613'); return false;" >Goto Conquest Battle!</a>    			        </div>
    			    </div>
    			</div>
    		    		</div>
    			<div style="height:7px;width:297px;background-image:url('https://castleagegame1-a.akamaihd.net/graphics/news_innercontainer_bot.gif');background-repeat:no-repeat;">&nbsp;</div>
    		<div style="width:297px;height:15px;"></div>
    		<div style="height:29px;width:297px;background-image:url('https://castleagegame1-a.akamaihd.net/graphics/news_innercontainer_top.gif');background-repeat:no-repeat;font-weight:bold;">
    		    <div style="width:35px;height:25px;float:left;">
    		        <div style="padding-left:5px;">
                        <img src='https://castleagegame1-a.akamaihd.net/graphics/achivement_tabicons_conquest_duel_rank.gif' height="25" width="25" />
                    </div>
                </div>
        
                <div style="width:170px;height:25px;float:left;">
                    <div style="padding:5px 0 0 0;">
                        <span style="color:#A30000">Defeat!</span> 4d 6h ago:
                    </div>
                </div>
                <div style="width:80px;height:25px;float:left;">
                    <div style="padding:4px 0 0 8px;">
                                                    <form onsubmit="ajaxFormSend('globalContainer', 'conquest_duel.php', this);return false;" method="post" id="de0b55d366e2c7c6bff9a7a97480b9b9" >
        					<input type="hidden" name="target_id" value="100002113424506"  />
        					<input type="hidden" name="action" value="battle" />
        					<input type="hidden" name="duel" value="true"  />
        					<input type="hidden" name="bqh" value="96464f621978fa4704532fed3e314b4f" />
        					<div class="imgButton">
        						<input alt="Duel" type="image" src="https://castleagegame1-a.akamaihd.net/graphics/news_btn_revenge.gif" name="battle_frm_sbm" />
        					</div>
        					<input type="hidden" name="ajax"  value="1" />
        					</form>
                                            </div>
                </div>
    		</div>
    		    		        <div style="width:297px;background-image:url('https://castleagegame1-a.akamaihd.net/graphics/news_innercontainer_mid.gif');background-repeat:y-repeat;">
    		            <div style="padding:2px 0 3px 15px;">
    				        <div style="width:275px;">
                                Conquest Duel! You engaged in multiple battles against <a href="keep.php?casuser=100002113424506" onclick="ajaxLinkSend('globalContainer', 'keep.php?casuser=100002113424506'); return false;" >Malaikat Al-Maut</a>!<br/>
                                <strong>You won 0 times and lost 11 times. </strong>
                                <span id="expandButton_100002113424506_5_1" onclick="styleDisplay('battle_messages_100002113424506_5_1','block');styleDisplay('expandButton_100002113424506_5_1','none');styleDisplay('collapseButton_100002113424506_5_1','block');"><a href="#">[+]</a></span>
                                <span id="collapseButton_100002113424506_5_1" style="display:none"  onclick="styleDisplay('battle_messages_100002113424506_5_1','none');styleDisplay('expandButton_100002113424506_5_1','block');styleDisplay('collapseButton_100002113424506_5_1','none');"><a href="#">[-]</a></span>
                            </div>
    				    </div>
    				</div>
    		    		<div id="battle_messages_100002113424506_5_1" style="display:none">
    		    			<div style="width:297px;background-image:url('https://castleagegame1-a.akamaihd.net/graphics/news_innercontainer_mid.gif');background-repeat:y-repeat;">
    			    <div style="padding:2px 0 3px 15px;">
    			        <div style="width:275px;">    						        
    			            You were challenged by <a href="keep.php?casuser=100002113424506" onclick="ajaxLinkSend('globalContainer', 'keep.php?casuser=100002113424506'); return false;" >Malaikat Al-Maut</a><br />You lost the conquest duel, taking <strong>9 damage</strong> and dealing <strong>2 damage</strong> to your rival. You have lost 3<a href="conquest_battlerank.php" onclick="ajaxLinkSend('globalContainer', 'conquest_battlerank.php'); return false;" > Conquest Points</a>!    			        </div>
    			    </div>
    			</div>
    		    			<div style="width:297px;background-image:url('https://castleagegame1-a.akamaihd.net/graphics/news_innercontainer_mid.gif');background-repeat:y-repeat;">
    			    <div style="padding:2px 0 3px 15px;">
    			        <div style="width:275px;">    						        
    			            You were challenged by <a href="keep.php?casuser=100002113424506" onclick="ajaxLinkSend('globalContainer', 'keep.php?casuser=100002113424506'); return false;" >Malaikat Al-Maut</a><br />You lost the conquest duel, taking <strong>8 damage</strong> and dealing <strong>3 damage</strong> to your rival. You have lost 3<a href="conquest_battlerank.php" onclick="ajaxLinkSend('globalContainer', 'conquest_battlerank.php'); return false;" > Conquest Points</a>!    			        </div>
    			    </div>
    			</div>
    		    			<div style="width:297px;background-image:url('https://castleagegame1-a.akamaihd.net/graphics/news_innercontainer_mid.gif');background-repeat:y-repeat;">
    			    <div style="padding:2px 0 3px 15px;">
    			        <div style="width:275px;">    						        
    			            You were challenged by <a href="keep.php?casuser=100002113424506" onclick="ajaxLinkSend('globalContainer', 'keep.php?casuser=100002113424506'); return false;" >Malaikat Al-Maut</a><br />You lost the conquest duel, taking <strong>8 damage</strong> and dealing <strong>3 damage</strong> to your rival. You have lost 3<a href="conquest_battlerank.php" onclick="ajaxLinkSend('globalContainer', 'conquest_battlerank.php'); return false;" > Conquest Points</a>!    			        </div>
    			    </div>
    			</div>
    		    			<div style="width:297px;background-image:url('https://castleagegame1-a.akamaihd.net/graphics/news_innercontainer_mid.gif');background-repeat:y-repeat;">
    			    <div style="padding:2px 0 3px 15px;">
    			        <div style="width:275px;">    						        
    			            You were challenged by <a href="keep.php?casuser=100002113424506" onclick="ajaxLinkSend('globalContainer', 'keep.php?casuser=100002113424506'); return false;" >Malaikat Al-Maut</a><br />You lost the conquest duel, taking <strong>9 damage</strong> and dealing <strong>4 damage</strong> to your rival. You have lost 3<a href="conquest_battlerank.php" onclick="ajaxLinkSend('globalContainer', 'conquest_battlerank.php'); return false;" > Conquest Points</a>!    			        </div>
    			    </div>
    			</div>
    		    			<div style="width:297px;background-image:url('https://castleagegame1-a.akamaihd.net/graphics/news_innercontainer_mid.gif');background-repeat:y-repeat;">
    			    <div style="padding:2px 0 3px 15px;">
    			        <div style="width:275px;">    						        
    			            You were challenged by <a href="keep.php?casuser=100002113424506" onclick="ajaxLinkSend('globalContainer', 'keep.php?casuser=100002113424506'); return false;" >Malaikat Al-Maut</a><br />You lost the conquest duel, taking <strong>6 damage</strong> and dealing <strong>3 damage</strong> to your rival. You have lost 3<a href="conquest_battlerank.php" onclick="ajaxLinkSend('globalContainer', 'conquest_battlerank.php'); return false;" > Conquest Points</a>!    			        </div>
    			    </div>
    			</div>
    		    			<div style="width:297px;background-image:url('https://castleagegame1-a.akamaihd.net/graphics/news_innercontainer_mid.gif');background-repeat:y-repeat;">
    			    <div style="padding:2px 0 3px 15px;">
    			        <div style="width:275px;">    						        
    			            You were challenged by <a href="keep.php?casuser=100002113424506" onclick="ajaxLinkSend('globalContainer', 'keep.php?casuser=100002113424506'); return false;" >Malaikat Al-Maut</a><br />You lost the conquest duel, taking <strong>6 damage</strong> and dealing <strong>3 damage</strong> to your rival. You have lost 3<a href="conquest_battlerank.php" onclick="ajaxLinkSend('globalContainer', 'conquest_battlerank.php'); return false;" > Conquest Points</a>!    			        </div>
    			    </div>
    			</div>
    		    			<div style="width:297px;background-image:url('https://castleagegame1-a.akamaihd.net/graphics/news_innercontainer_mid.gif');background-repeat:y-repeat;">
    			    <div style="padding:2px 0 3px 15px;">
    			        <div style="width:275px;">    						        
    			            You were challenged by <a href="keep.php?casuser=100002113424506" onclick="ajaxLinkSend('globalContainer', 'keep.php?casuser=100002113424506'); return false;" >Malaikat Al-Maut</a><br />You lost the conquest duel, taking <strong>8 damage</strong> and dealing <strong>4 damage</strong> to your rival. You have lost 3<a href="conquest_battlerank.php" onclick="ajaxLinkSend('globalContainer', 'conquest_battlerank.php'); return false;" > Conquest Points</a>!    			        </div>
    			    </div>
    			</div>
    		    			<div style="width:297px;background-image:url('https://castleagegame1-a.akamaihd.net/graphics/news_innercontainer_mid.gif');background-repeat:y-repeat;">
    			    <div style="padding:2px 0 3px 15px;">
    			        <div style="width:275px;">    						        
    			            You were challenged by <a href="keep.php?casuser=100002113424506" onclick="ajaxLinkSend('globalContainer', 'keep.php?casuser=100002113424506'); return false;" >Malaikat Al-Maut</a><br />You lost the conquest duel, taking <strong>9 damage</strong> and dealing <strong>5 damage</strong> to your rival. You have lost 3<a href="conquest_battlerank.php" onclick="ajaxLinkSend('globalContainer', 'conquest_battlerank.php'); return false;" > Conquest Points</a>!    			        </div>
    			    </div>
    			</div>
    		    			<div style="width:297px;background-image:url('https://castleagegame1-a.akamaihd.net/graphics/news_innercontainer_mid.gif');background-repeat:y-repeat;">
    			    <div style="padding:2px 0 3px 15px;">
    			        <div style="width:275px;">    						        
    			            You were challenged by <a href="keep.php?casuser=100002113424506" onclick="ajaxLinkSend('globalContainer', 'keep.php?casuser=100002113424506'); return false;" >Malaikat Al-Maut</a><br />You lost the conquest duel, taking <strong>9 damage</strong> and dealing <strong>4 damage</strong> to your rival. You have lost 3<a href="conquest_battlerank.php" onclick="ajaxLinkSend('globalContainer', 'conquest_battlerank.php'); return false;" > Conquest Points</a>!    			        </div>
    			    </div>
    			</div>
    		    			<div style="width:297px;background-image:url('https://castleagegame1-a.akamaihd.net/graphics/news_innercontainer_mid.gif');background-repeat:y-repeat;">
    			    <div style="padding:2px 0 3px 15px;">
    			        <div style="width:275px;">    						        
    			            You were challenged by <a href="keep.php?casuser=100002113424506" onclick="ajaxLinkSend('globalContainer', 'keep.php?casuser=100002113424506'); return false;" >Malaikat Al-Maut</a><br />You lost the conquest duel, taking <strong>9 damage</strong> and dealing <strong>2 damage</strong> to your rival. You have lost 3<a href="conquest_battlerank.php" onclick="ajaxLinkSend('globalContainer', 'conquest_battlerank.php'); return false;" > Conquest Points</a>!    			        </div>
    			    </div>
    			</div>
    		    			<div style="width:297px;background-image:url('https://castleagegame1-a.akamaihd.net/graphics/news_innercontainer_mid.gif');background-repeat:y-repeat;">
    			    <div style="padding:2px 0 3px 15px;">
    			        <div style="width:275px;">    						        
    			            You were challenged by <a href="keep.php?casuser=100002113424506" onclick="ajaxLinkSend('globalContainer', 'keep.php?casuser=100002113424506'); return false;" >Malaikat Al-Maut</a><br />You lost the conquest duel, taking <strong>9 damage</strong> and dealing <strong>2 damage</strong> to your rival. You have lost 3<a href="conquest_battlerank.php" onclick="ajaxLinkSend('globalContainer', 'conquest_battlerank.php'); return false;" > Conquest Points</a>!    			        </div>
    			    </div>
    			</div>
    		    		</div>
    			<div style="height:7px;width:297px;background-image:url('https://castleagegame1-a.akamaihd.net/graphics/news_innercontainer_bot.gif');background-repeat:no-repeat;">&nbsp;</div>
    		<div style="width:297px;height:15px;"></div>
    		<div style="height:29px;width:297px;background-image:url('https://castleagegame1-a.akamaihd.net/graphics/news_innercontainer_top.gif');background-repeat:no-repeat;font-weight:bold;">
    		    <div style="width:35px;height:25px;float:left;">
    		        <div style="padding-left:5px;">
                        <img src='https://castleagegame1-a.akamaihd.net/graphics/achivement_tabicons_conquest_duel_rank.gif' height="25" width="25" />
                    </div>
                </div>
        
                <div style="width:170px;height:25px;float:left;">
                    <div style="padding:5px 0 0 0;">
                        <span style="color:#A30000">Defeat!</span> 5d 11h ago:
                    </div>
                </div>
                <div style="width:80px;height:25px;float:left;">
                    <div style="padding:4px 0 0 8px;">
                                                    <form onsubmit="ajaxFormSend('globalContainer', 'conquest_duel.php', this);return false;" method="post" id="ddad1e45062d34024fb51a7a562a4ca5" >
        					<input type="hidden" name="target_id" value="100000472034065"  />
        					<input type="hidden" name="action" value="battle" />
        					<input type="hidden" name="duel" value="true"  />
        					<input type="hidden" name="bqh" value="96464f621978fa4704532fed3e314b4f" />
        					<div class="imgButton">
        						<input alt="Duel" type="image" src="https://castleagegame1-a.akamaihd.net/graphics/news_btn_revenge.gif" name="battle_frm_sbm" />
        					</div>
        					<input type="hidden" name="ajax"  value="1" />
        					</form>
                                            </div>
                </div>
    		</div>
    		    		<div id="battle_messages_100000472034065_5_1" style="display:block">
    		    			<div style="width:297px;background-image:url('https://castleagegame1-a.akamaihd.net/graphics/news_innercontainer_mid.gif');background-repeat:y-repeat;">
    			    <div style="padding:2px 0 3px 15px;">
    			        <div style="width:275px;">    						        
    			            You were challenged by <a href="keep.php?casuser=100000472034065" onclick="ajaxLinkSend('globalContainer', 'keep.php?casuser=100000472034065'); return false;" >Kim Kol</a><br />You lost the conquest duel, taking <strong>9 damage</strong> and dealing <strong>3 damage</strong> to your rival. You have lost 0<a href="conquest_battlerank.php" onclick="ajaxLinkSend('globalContainer', 'conquest_battlerank.php'); return false;" > Conquest Points</a>!    			        </div>
    			    </div>
    			</div>
    		    		</div>
    			<div style="height:7px;width:297px;background-image:url('https://castleagegame1-a.akamaihd.net/graphics/news_innercontainer_bot.gif');background-repeat:no-repeat;">&nbsp;</div>
</div>                </div>
                
            </div>
        </div>

</div>
    	</div>
    	
	    	<div style="padding:5px 0 0 8px;">
    		<div style="height:234px;width:330px;padding: 0px 0 0 0;">
    			<a href='https://itunes.apple.com/us/app/castle-age/id402347397?mt=8' target="_blank">
    				<img class='imgButton' src='https://castleagegame1-a.akamaihd.net/graphics/newiphone_ad_facebook.jpg' />
    			</a>
    			<div style="clear:both;"></div>
    		</div>
    	</div>
		
		
		  
	        
      </td></tr></table>
	


				</td></tr></table>
				<div style="width:740px;height:40px;"></div>
		</div> 		
		
    <div id="single_popup_background" style="cursor:pointer; display:none;" class="connect_castlepb_bg" onclick="hidePositionBox();  return false;"></div>
	
	<div id="single_popup" class="castlepb2" style="display:none;">
        <table cellspacing="0" cellpadding="0" >
	        <tr>
	            <td>
 			        <div style="clear:both"></div>
				        <div id="single_popup_content"></div>	
			        <div style="clear:both"></div>					
	            </td>		
	        </tr>
        </table>
	</div>
						
						
		</div> 		<div id="persistent_layer" style="width:760px;position:absolute;top:0px;height:0px;">
			<div style="width:545px;height:185px;position:relative;float:right;top:105px;overflow:hidden;" id="hot_swap_gen_incl_container">
				<style type="text/css">
.noClick {pointer-events:none;z-index:-1;}
.haveClick {pointer-events:auto;z-index:1001;}
</style>
        <div id="pin_hover" style="visibility:hidden;z-index:1006;  position:absolute;width:210px;">
    		<div style="background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guild_class_upgrades/class_hovermenu_top.jpg');width:210px;height:12px;">
    		</div>
    		<div style="background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guild_class_upgrades/class_hovermenu_middle.jpg');width:210px;">
    			<div style="padding: 7px 7px 10px 10px;">
    				<div style="width:190px;color:#ffffff;font-size:10px;text-align:center;">
    					Click to Pin    				</div>
    			</div>
    		</div>
    		<div style="background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guild_class_upgrades/class_hovermenu_bottom.jpg');width:210px;height:12px;">
    		</div>
    	</div>
		        <div id="unpin_hover" style="visibility:hidden;z-index:1006;  position:absolute;width:210px;">
    		<div style="background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guild_class_upgrades/class_hovermenu_top.jpg');width:210px;height:12px;">
    		</div>
    		<div style="background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guild_class_upgrades/class_hovermenu_middle.jpg');width:210px;">
    			<div style="padding: 7px 7px 10px 10px;">
    				<div style="width:190px;color:#ffffff;font-size:10px;text-align:center;">
    					Click to Unpin    				</div>
    			</div>
    		</div>
    		<div style="background-image:url('https://castleagegame1-a.akamaihd.net/graphics/guild_class_upgrades/class_hovermenu_bottom.jpg');width:210px;height:12px;">
    		</div>
    	</div>
		<div id="hot_swap_general_outer" class="noClick" style="width:476px;height:261px;position:relative;top:8px;left:-186px;overflow:hidden;">
	<div id='recent_general_swap' style='background-image:url("https://castleagegame1-a.akamaihd.net/graphics/hot_leftexpand2.gif");width:540px;height:259px;font-weight:bold;position:relative;left:0px;display:none;'>
		<div style="width:462px;height:252px;overflow:hidden;" id="quickSwapGeneralsSection">
			<div style="width:100%;height:22px;">
				<div style='float:left;width:110px;height:17px;padding-top:5px;color:#f9df66;font-size:10px;text-align:center;overflow:hidden;'>Quick Select:</div>
				<div style="float:left;height:100%;width:210px;text-align:center;"></div>
			</div>
			<div style='padding:0px;'>
				<div style='font-size:30px; text-align:center; padding-top:40px; color:white;'>
					LOADING...
				</div>
			</div>
		</div>
	</div>
</div>
<div id="hot_swap_class_outer" class="noClick" style="width:59px;height:380px;position:relative;left:400px;top:-253px;overflow:hidden;">
	<div id="hot_swap_class_div" style="width:59px;height:190px;position:relative;z-index:1001;top:98px;left:4px;display:none;">
		<div style="background-image:url('https://castleagegame1-a.akamaihd.net/graphics/hot_classdropdown.gif');background-size:59px 190px;background-repeat:no-repeat;width:59px;height:190px;padding:70px 0px 0px 0px;text-align:center;">
							<div style="background-image:url('https://castleagegame1-a.akamaihd.net/graphics/hot_changeclassbtn.gif');width:51px;height:38px;margin:0px 0px 0px 2px;cursor:pointer;" onclick="doHotSwapClass('warrior');">
					<img src="https://castleagegame1-a.akamaihd.net/graphics/class_warrior.gif" style="width:20px;margin:3px 0px 0px 0px;" />
					<div style="width:100%;height:14px;overflow:hidden;color:white;font-size:6pt;">WARRIOR</div>
				</div>
								<div style="background-image:url('https://castleagegame1-a.akamaihd.net/graphics/hot_changeclassbtn.gif');width:51px;height:38px;margin:0px 0px 0px 2px;cursor:pointer;" onclick="doHotSwapClass('rogue');">
					<img src="https://castleagegame1-a.akamaihd.net/graphics/class_rogue.gif" style="width:20px;margin:3px 0px 0px 0px;" />
					<div style="width:100%;height:14px;overflow:hidden;color:white;font-size:6pt;">ROGUE</div>
				</div>
								<div style="background-image:url('https://castleagegame1-a.akamaihd.net/graphics/hot_changeclassbtn.gif');width:51px;height:38px;margin:0px 0px 0px 2px;cursor:pointer;" onclick="doHotSwapClass('mage');">
					<img src="https://castleagegame1-a.akamaihd.net/graphics/class_mage.gif" style="width:20px;margin:3px 0px 0px 0px;" />
					<div style="width:100%;height:14px;overflow:hidden;color:white;font-size:6pt;">MAGE</div>
				</div>
						</div>
	</div>
</div>
<div id="hot_swap_loadouts_div" style="width:94px;height:167px;position:relative;z-index:1001;left:445px;top:-633px;">
		<div style="background-image:url('https://castleagegame1-a.akamaihd.net/graphics/hot_rightexpand.gif');background-size:94px 167px;background-repeat:no-repeat;width:94px;height:166px;padding:2px 0px 0px 0px;text-align:center;">
		<div style="width:66px;height:120px;margin:0px 3px 0px 24px;overflow:hidden;">
				<div id="hot_swap_loadouts_content_div" style="position:relative;top:0px;">
						<div style="background-image:url('https://castleagegame1-a.akamaihd.net/graphics/hot_loadoutbtn_on.gif');width:66px;height:24px;">
					<div style="float:left;width:40px;height:17px;margin:7px 0px 0px 2px;overflow:hidden;cursor:pointer;color:white;font-size:7pt;" onclick="doHotSwapLoadout('1');">
						idle					</div>
					<div style="float:left;width:22px;text-align:center;height:22px;margin:1px 0px 0px 0px;">
												<img src="https://castleagegame1-a.akamaihd.net/graphics/loadout_identifiericons_12.gif" style='height:20px;'/>
											</div>
				</div>
						<div style="background-image:url('https://castleagegame1-a.akamaihd.net/graphics/hot_loadoutbtn.gif');width:66px;height:24px;">
					<div style="float:left;width:40px;height:17px;margin:7px 0px 0px 2px;overflow:hidden;cursor:pointer;color:white;font-size:7pt;" onclick="doHotSwapLoadout('2');">
						monst					</div>
					<div style="float:left;width:22px;text-align:center;height:22px;margin:1px 0px 0px 0px;">
												<img src="https://castleagegame1-a.akamaihd.net/graphics/loadout_identifiericons_08.gif" style='height:20px;'/>
											</div>
				</div>
						<div style="background-image:url('https://castleagegame1-a.akamaihd.net/graphics/hot_loadoutbtn.gif');width:66px;height:24px;">
					<div style="float:left;width:40px;height:17px;margin:7px 0px 0px 2px;overflow:hidden;cursor:pointer;color:white;font-size:7pt;" onclick="doHotSwapLoadout('3');">
						rouge					</div>
					<div style="float:left;width:22px;text-align:center;height:22px;margin:1px 0px 0px 0px;">
												<img src="https://castleagegame1-a.akamaihd.net/graphics/loadout_identifiericons_14.gif" style='height:20px;'/>
											</div>
				</div>
						<div style="background-image:url('https://castleagegame1-a.akamaihd.net/graphics/hot_loadoutbtn.gif');width:66px;height:24px;">
					<div style="float:left;width:40px;height:17px;margin:7px 0px 0px 2px;overflow:hidden;cursor:pointer;color:white;font-size:7pt;" onclick="doHotSwapLoadout('4');">
						Set4					</div>
					<div style="float:left;width:22px;text-align:center;height:22px;margin:1px 0px 0px 0px;">
												<img src="https://castleagegame1-a.akamaihd.net/graphics/loadout_identifiericons_01.gif" style='height:20px;'/>
											</div>
				</div>
						<div style="background-image:url('https://castleagegame1-a.akamaihd.net/graphics/hot_loadoutbtn.gif');width:66px;height:24px;">
					<div style="float:left;width:40px;height:17px;margin:7px 0px 0px 2px;overflow:hidden;cursor:pointer;color:white;font-size:7pt;" onclick="ajaxLinkSend('globalContainer','player_loadouts.php?loadout=5');return false;">
						Set5					</div>
					<div style="float:left;width:22px;text-align:center;height:22px;margin:1px 0px 0px 0px;">
											</div>
				</div>
						<div style="background-image:url('https://castleagegame1-a.akamaihd.net/graphics/hot_loadoutbtn.gif');width:66px;height:24px;">
					<div style="float:left;width:40px;height:17px;margin:7px 0px 0px 2px;overflow:hidden;cursor:pointer;color:white;font-size:7pt;" onclick="ajaxLinkSend('globalContainer','player_loadouts.php?loadout=6');return false;">
						Set6					</div>
					<div style="float:left;width:22px;text-align:center;height:22px;margin:1px 0px 0px 0px;">
											</div>
				</div>
						<div style="background-image:url('https://castleagegame1-a.akamaihd.net/graphics/hot_loadoutbtn.gif');width:66px;height:24px;">
					<div style="float:left;width:40px;height:17px;margin:7px 0px 0px 2px;overflow:hidden;cursor:pointer;color:white;font-size:7pt;" onclick="ajaxLinkSend('globalContainer','player_loadouts.php?loadout=7');return false;">
						Set7					</div>
					<div style="float:left;width:22px;text-align:center;height:22px;margin:1px 0px 0px 0px;">
											</div>
				</div>
						<div style="background-image:url('https://castleagegame1-a.akamaihd.net/graphics/hot_loadoutbtn.gif');width:66px;height:24px;">
					<div style="float:left;width:40px;height:17px;margin:7px 0px 0px 2px;overflow:hidden;cursor:pointer;color:white;font-size:7pt;" onclick="ajaxLinkSend('globalContainer','player_loadouts.php?loadout=8');return false;">
						Set8					</div>
					<div style="float:left;width:22px;text-align:center;height:22px;margin:1px 0px 0px 0px;">
											</div>
				</div>
						<div style="background-image:url('https://castleagegame1-a.akamaihd.net/graphics/hot_loadoutbtn.gif');width:66px;height:24px;">
					<div style="float:left;width:40px;height:17px;margin:7px 0px 0px 2px;overflow:hidden;cursor:pointer;color:white;font-size:7pt;" onclick="ajaxLinkSend('globalContainer','player_loadouts.php?loadout=9');return false;">
						Set9					</div>
					<div style="float:left;width:22px;text-align:center;height:22px;margin:1px 0px 0px 0px;">
											</div>
				</div>
						<div style="background-image:url('https://castleagegame1-a.akamaihd.net/graphics/hot_loadoutbtn.gif');width:66px;height:24px;">
					<div style="float:left;width:40px;height:17px;margin:7px 0px 0px 2px;overflow:hidden;cursor:pointer;color:white;font-size:7pt;" onclick="ajaxLinkSend('globalContainer','player_loadouts.php?loadout=10');return false;">
						Set10					</div>
					<div style="float:left;width:22px;text-align:center;height:22px;margin:1px 0px 0px 0px;">
											</div>
				</div>
						<div style="background-image:url('https://castleagegame1-a.akamaihd.net/graphics/hot_loadoutbtn.gif');width:66px;height:24px;">
					<div style="float:left;width:40px;height:17px;margin:7px 0px 0px 2px;overflow:hidden;cursor:pointer;color:white;font-size:7pt;" onclick="ajaxLinkSend('globalContainer','player_loadouts.php?loadout=11');return false;">
						Set11					</div>
					<div style="float:left;width:22px;text-align:center;height:22px;margin:1px 0px 0px 0px;">
											</div>
				</div>
						<div style="background-image:url('https://castleagegame1-a.akamaihd.net/graphics/hot_loadoutbtn.gif');width:66px;height:24px;">
					<div style="float:left;width:40px;height:17px;margin:7px 0px 0px 2px;overflow:hidden;cursor:pointer;color:white;font-size:7pt;" onclick="ajaxLinkSend('globalContainer','player_loadouts.php?loadout=12');return false;">
						Set12					</div>
					<div style="float:left;width:22px;text-align:center;height:22px;margin:1px 0px 0px 0px;">
											</div>
				</div>
						<div style="background-image:url('https://castleagegame1-a.akamaihd.net/graphics/hot_loadoutbtn.gif');width:66px;height:24px;">
					<div style="float:left;width:40px;height:17px;margin:7px 0px 0px 2px;overflow:hidden;cursor:pointer;color:white;font-size:7pt;" onclick="ajaxLinkSend('globalContainer','player_loadouts.php?loadout=13');return false;">
						Set13					</div>
					<div style="float:left;width:22px;text-align:center;height:22px;margin:1px 0px 0px 0px;">
											</div>
				</div>
						<div style="background-image:url('https://castleagegame1-a.akamaihd.net/graphics/hot_loadoutbtn.gif');width:66px;height:24px;">
					<div style="float:left;width:40px;height:17px;margin:7px 0px 0px 2px;overflow:hidden;cursor:pointer;color:white;font-size:7pt;" onclick="ajaxLinkSend('globalContainer','player_loadouts.php?loadout=14');return false;">
						Set14					</div>
					<div style="float:left;width:22px;text-align:center;height:22px;margin:1px 0px 0px 0px;">
											</div>
				</div>
						<div style="background-image:url('https://castleagegame1-a.akamaihd.net/graphics/hot_loadoutbtn.gif');width:66px;height:24px;">
					<div style="float:left;width:40px;height:17px;margin:7px 0px 0px 2px;overflow:hidden;cursor:pointer;color:white;font-size:7pt;" onclick="ajaxLinkSend('globalContainer','player_loadouts.php?loadout=15');return false;">
						Set15					</div>
					<div style="float:left;width:22px;text-align:center;height:22px;margin:1px 0px 0px 0px;">
											</div>
				</div>
						<div style="background-image:url('https://castleagegame1-a.akamaihd.net/graphics/hot_loadoutbtn.gif');width:66px;height:24px;">
					<div style="float:left;width:40px;height:17px;margin:7px 0px 0px 2px;overflow:hidden;cursor:pointer;color:white;font-size:7pt;" onclick="ajaxLinkSend('globalContainer','player_loadouts.php?loadout=16');return false;">
						Set16					</div>
					<div style="float:left;width:22px;text-align:center;height:22px;margin:1px 0px 0px 0px;">
											</div>
				</div>
						<div style="background-image:url('https://castleagegame1-a.akamaihd.net/graphics/hot_loadoutbtn.gif');width:66px;height:24px;">
					<div style="float:left;width:40px;height:17px;margin:7px 0px 0px 2px;overflow:hidden;cursor:pointer;color:white;font-size:7pt;" onclick="ajaxLinkSend('globalContainer','player_loadouts.php?loadout=17');return false;">
						Set17					</div>
					<div style="float:left;width:22px;text-align:center;height:22px;margin:1px 0px 0px 0px;">
											</div>
				</div>
						<div style="background-image:url('https://castleagegame1-a.akamaihd.net/graphics/hot_loadoutbtn.gif');width:66px;height:24px;">
					<div style="float:left;width:40px;height:17px;margin:7px 0px 0px 2px;overflow:hidden;cursor:pointer;color:white;font-size:7pt;" onclick="ajaxLinkSend('globalContainer','player_loadouts.php?loadout=18');return false;">
						Set18					</div>
					<div style="float:left;width:22px;text-align:center;height:22px;margin:1px 0px 0px 0px;">
											</div>
				</div>
						<div style="background-image:url('https://castleagegame1-a.akamaihd.net/graphics/hot_loadoutbtn.gif');width:66px;height:24px;">
					<div style="float:left;width:40px;height:17px;margin:7px 0px 0px 2px;overflow:hidden;cursor:pointer;color:white;font-size:7pt;" onclick="ajaxLinkSend('globalContainer','player_loadouts.php?loadout=19');return false;">
						Set19					</div>
					<div style="float:left;width:22px;text-align:center;height:22px;margin:1px 0px 0px 0px;">
											</div>
				</div>
						<div style="background-image:url('https://castleagegame1-a.akamaihd.net/graphics/hot_loadoutbtn.gif');width:66px;height:24px;">
					<div style="float:left;width:40px;height:17px;margin:7px 0px 0px 2px;overflow:hidden;cursor:pointer;color:white;font-size:7pt;" onclick="ajaxLinkSend('globalContainer','player_loadouts.php?loadout=20');return false;">
						Set20					</div>
					<div style="float:left;width:22px;text-align:center;height:22px;margin:1px 0px 0px 0px;">
											</div>
				</div>
					</div>
			</div>
		<div style="width:66px;height:20px;margin:0px 0px 0px 24px;">
						<select name="choose_loadout" onchange="selectLoadout(this);" style="width:66px;height:14px;font-size:7pt;margin:2px 0px 1px 0px;padding:0px;border:0px;float:left;">
								<option value="1" selected>idle</option>
								<option value="2" >monst</option>
								<option value="3" >rouge</option>
								<option value="4" >Set4</option>
								<option value="5" >Set5</option>
								<option value="6" >Set6</option>
								<option value="7" >Set7</option>
								<option value="8" >Set8</option>
								<option value="9" >Set9</option>
								<option value="10" >Set10</option>
								<option value="11" >Set11</option>
								<option value="12" >Set12</option>
								<option value="13" >Set13</option>
								<option value="14" >Set14</option>
								<option value="15" >Set15</option>
								<option value="16" >Set16</option>
								<option value="17" >Set17</option>
								<option value="18" >Set18</option>
								<option value="19" >Set19</option>
								<option value="20" >Set20</option>
							</select>
			<script type="text/javascript">
			var validLoadouts = {1:true,2:true,3:true,4:true};
			function selectLoadout(sel) {
				var i = sel.options[sel.selectedIndex].value;
				if (validLoadouts[i]) {
					doHotSwapLoadout(i);
				} else {
					ajaxLinkSend('globalContainer','player_loadouts.php?loadout='+i);
				}
			}
			</script>
					</div>
		<div style="width:66px;height:21px;margin:0px 0px 0px 24px;text-align:center;">
			<img id="hot_swap_loadout_scrollup" src="https://castleagegame1-a.akamaihd.net/graphics/hot_arrow_class_down.jpg" style="cursor:pointer;" onclick="scrollHotSwapLoadoutsDown(122.5, -367.5);" />
			<img id="hot_swap_loadout_scrolldown" src="https://castleagegame1-a.akamaihd.net/graphics/hot_arrow_class_up.jpg" style="cursor:pointer;" onclick="scrollHotSwapLoadoutsUp(122.5);" />
		</div>
	</div>
</div>
<div style='background-image:url("https://castleagegame1-a.akamaihd.net/graphics/hot_general_container.gif");width:178px;height:167px;float:right;font-weight:bold;z-index:1002;position:relative;left:-80px;top:-800px;'>
	<div style='color:#ffd20b; height:27px; width:178px;text-align:center; font-size:14px; overflow:hidden;'>
		<div style='float:left; width:20px; padding: 3px 0 0 2px; cursor:pointer;' class="imgButton">
			<img id='recent_general_swap_open' src="https://castleagegame1-a.akamaihd.net/graphics/hot_arrow_topleft.jpg"  onclick="openRecentGenerals(false);"/>
			<img id='recent_general_swap_close' src="https://castleagegame1-a.akamaihd.net/graphics/hot_arrow_topright.jpg" style='display:none;' onclick="closeRecentGenerals();"/>
		</div>
		<div style="float:left;padding-top:5px;width:123px;white-space:nowrap;overflow:hidden;font-size:9pt;line-height:1.5;">
		Edea		</div>
		<div style='float:right;width:20px;padding:3px 0 0 0px;cursor:pointer;margin-right:7px;' class="imgButton">
			<img id='hot_swap_loadouts_open' src="https://castleagegame1-a.akamaihd.net/graphics/hot_arrow_topright.jpg" style="display:none;" onclick="openHotSwapLoadouts();"/>
			<img id='hot_swap_loadouts_close' src="https://castleagegame1-a.akamaihd.net/graphics/hot_arrow_topleft.jpg" onclick="closeHotSwapLoadouts();"/>
		</div>
	</div>
	<div style="float:left;width:116px;">
		<div style='padding-left:4px;'>
			<a href="generals.php" onclick="ajaxLinkSend('globalContainer', 'generals.php'); return false;" ><div class="imgButton"><img title="click to select general" width="110" height="110" src="https://castleagegame1-a.akamaihd.net/graphics/hero_edea.jpg" /></div></a>		</div>
		<div style='font-size:14px;'>
							<div style='float:left; color:#fec182; padding: 5px 0 0 32px; width:25px; text-align:center;font-weight:normal;'> 
					7				</div>
				<div style='float:left; color:#b8e1fd; padding: 5px 0 0 30px; width:25px; text-align:center;font-weight:normal;'> 
					10				</div>
				<div style='clear:both;'></div>
					</div>
	</div>
	<div style="float:left; width:60px;">
		<div onclick="ajaxLinkSend('globalContainer','item_equip.php');return false;" style='padding: 0 0 0 5px;cursor:pointer;'>
								<div style="float:left;width:26px;height:26px;overflow:hidden;padding:1px 1px 0px 0px;">
						<img title="Lavaflow Cleaver" alt="Lavaflow Cleaver" src="https://castleagegame1-a.akamaihd.net/graphics/eq_thanatos2_weapon_ca.jpg" style="width:24px;height:24px;"/>
					</div>
									<div style="float:left;width:26px;height:26px;overflow:hidden;padding:1px 1px 0px 0px;">
						<img title="Warbringer Shield" alt="Warbringer Shield" src="https://castleagegame1-a.akamaihd.net/graphics/eq_warbringer_shield.jpg" style="width:24px;height:24px;"/>
					</div>
									<div style="float:left;width:26px;height:26px;overflow:hidden;padding:1px 1px 0px 0px;">
						<img title="Dragonslayer Armor" alt="Dragonslayer Armor" src="https://castleagegame1-a.akamaihd.net/graphics/eq_dragonslayer_armor.jpg" style="width:24px;height:24px;"/>
					</div>
									<div style="float:left;width:26px;height:26px;overflow:hidden;padding:1px 1px 0px 0px;">
						<img title="Soldiers Bone Helm" alt="Soldiers Bone Helm" src="https://castleagegame1-a.akamaihd.net/graphics/eq_conquest_rank_1.jpg" style="width:24px;height:24px;"/>
					</div>
									<div style="float:left;width:26px;height:26px;overflow:hidden;padding:1px 1px 0px 0px;">
						<img title="Retribution Amulet" alt="Retribution Amulet" src="https://castleagegame1-a.akamaihd.net/graphics/eq_retribution_amulet.jpg" style="width:24px;height:24px;"/>
					</div>
									<div style="float:left;width:26px;height:26px;overflow:hidden;padding:1px 1px 0px 0px;">
						<img title="Frost Bolt" alt="Frost Bolt" src="https://castleagegame1-a.akamaihd.net/graphics/eq_water_epic_magic.jpg" style="width:24px;height:24px;"/>
					</div>
									<div style="float:left;width:26px;height:26px;overflow:hidden;padding:1px 1px 0px 0px;">
						<img title="Knights Bone Gauntlets" alt="Knights Bone Gauntlets" src="https://castleagegame1-a.akamaihd.net/graphics/eq_conquest_rank_2.jpg" style="width:24px;height:24px;"/>
					</div>
									<div style="float:left;width:26px;height:26px;overflow:hidden;padding:1px 1px 0px 0px;">
						<img title="Warbringer Greaves" alt="Warbringer Greaves" src="https://castleagegame1-a.akamaihd.net/graphics/eq_warbringer_boot.jpg" style="width:24px;height:24px;"/>
					</div>
									</div>
	</div>
	<div style="float:left;width:60px;height:28px;margin-top:2px;">
		<img src="https://castleagegame1-a.akamaihd.net/graphics/class_cleric.gif" style="float:left;width:24px;margin:2px 4px 0px 4px;" />
		<img id="hot_swap_class_open" src="https://castleagegame1-a.akamaihd.net/graphics/hot_arrow_class_down.jpg" style="margin:4px 0px 0px 0px;cursor:pointer;" onclick="openHotSwapClass();" />
		<img id="hot_swap_class_close" src="https://castleagegame1-a.akamaihd.net/graphics/hot_arrow_class_up.jpg" style="display:none;margin:4px 0px 0px 0px;cursor:pointer;" onclick="closeHotSwapClass();" />
	</div>
</div>			</div>
		</div>
	</div> 	
</div>
</div></div>
<input type='hidden' id='current_pg_url' value="index.php?"/>
<input type='hidden' id='current_pg_info' value="index.php?close_result=global_bottom"/>

<div id="audio_div">
	</div>
</center>
<div id="fb-root"></div>
	<script src="https://connect.facebook.net/en_US/all.js"></script>
<script>
		 FB.init({
		     appId  : '46755028429',
		     status : true, // check login status
		     cookie : true, // enable cookies to allow the server to access the session
		     xfbml  : true  // parse XFBML
		   });
		 //FB.Canvas.setSize({ width: 760, height: 3000 });
		// FB.Canvas.setAutoResize();
		FB.Canvas.setAutoGrow();
		//use setAutoGrow() ?
		 //FB.Canvas.setAutoGrow();
</script>
</body>
</html>
