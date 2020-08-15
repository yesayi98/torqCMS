    /* Default Notifications */

      $.fn.default_noti = function(){
			Lobibox.notify('default', {
		    pauseDelayOnHover: true,
            continueDelayOnInactiveTab: false,
		    position: 'top right',
		    msg: 'Lorem ipsum dolor sit amet hears farmer indemnity inherent.'
		    });
		  }


      $.fn.info_noti = function(){
			Lobibox.notify('info', {
		    pauseDelayOnHover: true,
            continueDelayOnInactiveTab: false,
		    position: 'top right',
		    icon: 'fa fa-info-circle',
		    msg: 'Lorem ipsum dolor sit amet hears farmer indemnity inherent.'
		    });
		  }

      $.fn.warning_noti = function(){
			Lobibox.notify('warning', {
		    pauseDelayOnHover: true,
            continueDelayOnInactiveTab: false,
		    position: 'top right',
		    icon: 'fa fa-exclamation-circle',
		    msg: 'Lorem ipsum dolor sit amet hears farmer indemnity inherent.'
		    });
		  }

		  $.fn.error_noti = function(){
			Lobibox.notify('error', {
		    pauseDelayOnHover: true,
            continueDelayOnInactiveTab: false,
		    position: 'top right',
		    icon: 'fa fa-times-circle',
		    msg: 'Lorem ipsum dolor sit amet hears farmer indemnity inherent.'
		    });
		  }

		  $.fn.success_noti = function(){
			Lobibox.notify('success', {
		    pauseDelayOnHover: true,
            continueDelayOnInactiveTab: false,
		    position: 'top right',
		    icon: 'fa fa-check-circle',
		    msg: 'Lorem ipsum dolor sit amet hears farmer indemnity inherent.'
		    });
		  }




/* Rounded corners Notifications */

    $.fn.round_default_noti = function(){
		    Lobibox.notify('default', {
		    pauseDelayOnHover: true,
		    size: 'mini',
		    rounded: true,
		    delayIndicator: false,
            continueDelayOnInactiveTab: false,
		    position: 'top right',
		    msg: 'Lorem ipsum dolor sit amet hears farmer indemnity inherent.'
		    });
		  }


      $.fn.round_info_noti = function (){
			Lobibox.notify('info', {
		    pauseDelayOnHover: true,
		    size: 'mini',
		    rounded: true,
		    icon: 'fa fa-info-circle',
		    delayIndicator: false,
            continueDelayOnInactiveTab: false,
		    position: 'top right',
		    msg: 'Lorem ipsum dolor sit amet hears farmer indemnity inherent.'
		    });
		  }

      $.fn.round_warning_noti = function (msg){
			Lobibox.notify('warning', {
		    pauseDelayOnHover: true,
		    size: 'mini',
		    rounded: true,
		    delayIndicator: false,
		    icon: 'fa fa-exclamation-circle',
            continueDelayOnInactiveTab: false,
		    position: 'top right',
		    msg: msg?msg:'warning',
		    });
		  }

		  $.fn.round_error_noti = function (msg){
			Lobibox.notify('error', {
		    pauseDelayOnHover: true,
		    size: 'mini',
		    rounded: true,
		    delayIndicator: false,
		    icon: 'fa fa-times-circle',
            continueDelayOnInactiveTab: false,
		    position: 'top right',
		    msg: msg?msg:'error'
		    });
		  }

		  $.fn.round_success_noti = function (msg){
			Lobibox.notify('success', {
		    pauseDelayOnHover: true,
		    size: 'mini',
		    rounded: true,
		    icon: 'fa fa-check-circle',
		    delayIndicator: false,
        continueDelayOnInactiveTab: false,
		    position: 'top right',
		    msg: msg?msg:'success'
		    });
		  }




     /* Notifications With Images*/

      $.fn.img_default_noti = function(){
			Lobibox.notify('default', {
		    pauseDelayOnHover: true,
            continueDelayOnInactiveTab: false,
		    position: 'top right',
		    img: 'assets/plugins/notifications/img/1.jpg', //path to image
		    msg: 'Lorem ipsum dolor sit amet hears farmer indemnity inherent.'
		    });
		  }


      $.fn.img_info_noti = function (){
			Lobibox.notify('info', {
		    pauseDelayOnHover: true,
            continueDelayOnInactiveTab: false,
            icon: 'fa fa-info-circle',
		    position: 'top right',
		    img: 'assets/plugins/notifications/img/2.jpg', //path to image
		    msg: 'Lorem ipsum dolor sit amet hears farmer indemnity inherent.'
		    });
		  }

      $.fn.img_warning_noti = function (){
			Lobibox.notify('warning', {
		    pauseDelayOnHover: true,
		    icon: 'fa fa-exclamation-circle',
            continueDelayOnInactiveTab: false,
		    position: 'top right',
		    img: 'assets/plugins/notifications/img/3.jpg', //path to image
		    msg: 'Lorem ipsum dolor sit amet hears farmer indemnity inherent.'
		    });
		  }

		  $.fn.img_error_noti = function (){
			Lobibox.notify('error', {
		    pauseDelayOnHover: true,
            continueDelayOnInactiveTab: false,
            icon: 'fa fa-times-circle',
		    position: 'top right',
		    img: 'assets/plugins/notifications/img/4.jpg', //path to image
		    msg: 'Lorem ipsum dolor sit amet hears farmer indemnity inherent.'
		    });
		  }

		  $.fn.img_success_noti = function (){
			Lobibox.notify('success', {
		    pauseDelayOnHover: true,
            continueDelayOnInactiveTab: false,
		    position: 'top right',
		    icon: 'fa fa-check-circle',
		    img: 'assets/plugins/notifications/img/5.jpg', //path to image
		    msg: 'Lorem ipsum dolor sit amet hears farmer indemnity inherent.'
		    });
		  }





     /* Notifications With Images*/


      $.fn.pos1_default_noti = function(){
			Lobibox.notify('default', {
		    pauseDelayOnHover: true,
            continueDelayOnInactiveTab: false,
		    position: 'center top',
		    size: 'mini',
		    msg: 'Lorem ipsum dolor sit amet hears farmer indemnity inherent.'
		    });
		  }

      $.fn.pos2_info_noti = function (){
			Lobibox.notify('info', {
		    pauseDelayOnHover: true,
		    icon: 'fa fa-info-circle',
            continueDelayOnInactiveTab: false,
		    position: 'top left',
		    size: 'mini',
		    msg: 'Lorem ipsum dolor sit amet hears farmer indemnity inherent.'
		    });
		  }

      $.fn.pos3_warning_noti = function (){
			Lobibox.notify('warning', {
		    pauseDelayOnHover: true,
		    icon: 'fa fa-exclamation-circle',
            continueDelayOnInactiveTab: false,
		    position: 'top right',
		    size: 'mini',
		    msg: 'Lorem ipsum dolor sit amet hears farmer indemnity inherent.'
		    });
		  }

		  $.fn.pos4_error_noti = function (){
			Lobibox.notify('error', {
		    pauseDelayOnHover: true,
		    icon: 'fa fa-times-circle',
		    size: 'mini',
            continueDelayOnInactiveTab: false,
		    position: 'bottom left',
		    msg: 'Lorem ipsum dolor sit amet hears farmer indemnity inherent.'
		    });
		  }

		  $.fn.pos5_success_noti = function pos5_success_noti(){
			Lobibox.notify('success', {
		    pauseDelayOnHover: true,
		    size: 'mini',
		    icon: 'fa fa-check-circle',
            continueDelayOnInactiveTab: false,
		    position: 'bottom right',
		    msg: 'Lorem ipsum dolor sit amet hears farmer indemnity inherent.'
		    });
		  }




     /* Animated Notifications*/


      $.fn.anim1_noti = function (){
			Lobibox.notify('default', {
		    pauseDelayOnHover: true,
            continueDelayOnInactiveTab: false,
		    position: 'center top',
		    showClass: 'fadeInDown',
            hideClass: 'fadeOutDown',
            width: 600,
		    msg: 'Lorem ipsum dolor sit amet hears farmer indemnity inherent.'
		    });
		  }


		  $.fn.anim2_noti = function (){
			Lobibox.notify('info', {
		    pauseDelayOnHover: true,
		    icon: 'fa fa-info-circle',
            continueDelayOnInactiveTab: false,
		    position: 'center top',
		    showClass: 'bounceIn',
            hideClass: 'bounceOut',
            width: 600,
		    msg: 'Lorem ipsum dolor sit amet hears farmer indemnity inherent.'
		    });
		  }

		  $.fn.anim3_noti = function (){
			Lobibox.notify('warning', {
		    pauseDelayOnHover: true,
            continueDelayOnInactiveTab: false,
            icon: 'fa fa-exclamation-circle',
		    position: 'center top',
		    showClass: 'zoomIn',
            hideClass: 'zoomOut',
            width: 600,
		    msg: 'Lorem ipsum dolor sit amet hears farmer indemnity inherent.'
		    });
		  }

		  $.fn.anim4_noti = function (){
			Lobibox.notify('error', {
		    pauseDelayOnHover: true,
            continueDelayOnInactiveTab: false,
            icon: 'fa fa-times-circle',
		    position: 'center top',
		    showClass: 'lightSpeedIn',
            hideClass: 'lightSpeedOut',
            width: 600,
		    msg: 'Lorem ipsum dolor sit amet hears farmer indemnity inherent.'
		    });
		  }

		  $.fn.anim5_noti = function (){
			Lobibox.notify('success', {
		    pauseDelayOnHover: true,
            continueDelayOnInactiveTab: false,
		    position: 'center top',
		    showClass: 'rollIn',
            hideClass: 'rollOut',
            icon: 'fa fa-check-circle',
            width: 600,
		    msg: 'Lorem ipsum dolor sit amet hears farmer indemnity inherent.'
		    });
		  }
