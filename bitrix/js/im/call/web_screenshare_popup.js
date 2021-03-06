;(function()
{
	BX.namespace('BX.Call');

	if (BX.Call.WebScreenSharePopup)
	{
		return;
	}

	BX.Call.WebScreenSharePopup = function(options)
	{
		this.popup = null;
		this.options = options || {};

		this.callbacks = {
			onClose: BX.type.isFunction(this.options.onClose) ? this.options.onClose : BX.DoNothing,
			onStopSharingClick: BX.type.isFunction(this.options.onStopSharingClick) ? this.options.onStopSharingClick : BX.DoNothing,
		}
	};

	BX.Call.WebScreenSharePopup.prototype = {
		show: function()
		{
			if (this.popup)
			{
				this.popup.show();
				return;
			}

			var popupWidth = 400;

			this.popup = new BX.PopupWindow({
				bindElement: this.options.bindElement,
				targetContainer: this.options.targetContainer,
				content: this.render(),
				padding: 0,
				contentPadding: 0,
				height: 38,
				width: popupWidth,
				offsetTop: -15,
				offsetLeft: (this.options.bindElement.offsetWidth / 2) - (popupWidth / 2) + (this.options.bindElement.offsetWidth / 2),
				className: 'bx-call-view-popup-web-screenshare',
				contentBackground: 'unset',

				angle: { position: 'bottom', offset: (popupWidth / 2) - 10 },
				events: {
					onDestroy: function ()
					{
						this.popup = null;
					}.bind(this)
				}
			});

			this.popup.show();
		},

		render: function()
		{
			return BX.create("div", {
				props: {className: "bx-call-view-popup-web-screenshare-body"},
				children: [
					BX.create("div", {
						props: {className: "bx-call-view-popup-web-screenshare-left"},
						children: [
							BX.create("div", {
								props: {className: "bx-call-view-popup-web-screenshare-icon-screen"},
							}),
							BX.create("div", {
								props: {className: "bx-call-view-popup-web-screenshare-text"},
								text: BX.message("IM_CALL_WEB_SCREENSHARE_STATUS")
							}),
						]
					}),
					BX.create("div", {
						props: {className: "bx-call-view-popup-web-screenshare-right"},
						children: [
							BX.create("div", {
								props: {className: "bx-call-view-popup-web-screenshare-stop ui-btn ui-btn-primary ui-btn-xs ui-btn-round ui-btn-no-caps ui-btn-icon-stop"},
								text: BX.message("IM_CALL_WEB_SCREENSHARE_STOP"),
								events: {
									click: function()
									{
										this.callbacks.onStopSharingClick();
									}.bind(this)
								}
							}),
							BX.create("div", {
								props: {className: "bx-call-view-popup-web-screenshare-close"},
								events: {
									click: function()
									{
										this.popup.close();
										this.callbacks.onClose();
									}.bind(this)
								},
							})
						]
					}),
				]
			})
		},

		close: function()
		{
			if (this.popup)
			{
				this.popup.close();
			}
		},

		destroy: function()
		{
			if (this.popup)
			{
				this.popup.destroy();
			}
		}
	}
})();