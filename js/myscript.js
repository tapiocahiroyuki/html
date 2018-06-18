// xs,smのブレイクポイントではcollapseを
// md,lg,xlのブレイクポイントではdropdownを動作させるスクリプト
Breakpoints({
  xs: {
      min: 0,
      max: 767
  },
  // Small devices (tablets)
  sm: {
      min: 576,
      max: 767
  },
  // Medium devices (desktops)
  md: {
      min: 768,
      max: 999
  },
  // Large devices (large desktops)
  lg: {
      min: 1000,
      max: 1087
  },
  xl: {
      min: 1088,
      max: Infinity
  }
});

function enableDropdown(obj){$(obj).addClass('dropdown-menu').removeClass('collapse');}
function disableDropdown(obj){$(obj).removeClass('dropdown-menu').addClass('collapse');}
// Breakpointがxs、smの場合dropdownを無効にする
Breakpoints.on('xs sm', {
    enter: function() {
        console.info('enter '+ this.name);
        disableDropdown('.dropdown-menu-md');
    },
    leave: function() {
        console.info('leave '+ this.name);
        enableDropdown('.dropdown-menu-md');
    }
}).on('md lg xl', {
    enter: function() {
        console.info('enter '+ this.name);
        enableDropdown('.dropdown-menu-md');
    },
    leave: function() {
        console.info('leave '+ this.name);
        disableDropdown('.dropdown-menu-md');
}});
