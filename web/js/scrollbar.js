
	function initPaneScrollbar ( pane, $Pane ) {
		$Pane.find("div.scrolling-content:first")
			// re/init the pseudo-scrollbar
			.jScrollPane({
				scrollbarMargin:	15	// spacing between text and scrollbar
			,	scrollbarWidth:		15
			,	arrowSize:			16
			,	showArrows:			true
			})
			// REMOVE the *fixed width & height* just set on jScrollPaneContainer
			.parent(".jScrollPaneContainer").css({
				width:	'100%'
			,	height:	'100%'
			})
		;
	};

	var myLayout	;

	$(document).ready(function () {

		myLayout = $('body').layout({
		//	need to re-init the scrollbar whenever the pane resizes
			center__onresize:			initPaneScrollbar
		,	west__onresize:				initPaneScrollbar
		,	east__onresize:				initPaneScrollbar
		//	timing issue, so init scrolling AFTER init done (below)
		,	triggerEventsOnLoad:		false
		//	live-resizing on all panes - not required
		,	resizeWhileDragging:		true
		//	avoid re-initing scrollbars repeatedly while: resizeWhileDragging
		//	sizing is much smoother, but scrollbar.height and text-width don't update until 'done'
		,	triggerEventsWhileDragging:	false
		// enable state-managment for pane-size
		,	useStateCookie:				true
		});

		// NOW init all scrollbars
		initPaneScrollbar( 'west', myLayout.panes.west );
		initPaneScrollbar( 'east', myLayout.panes.east );
		initPaneScrollbar( 'center', myLayout.panes.center );

 	});
