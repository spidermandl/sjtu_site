(function($) {

  $(function() {
    $('.index-slide .view-content').append($('<a href="javascript:;" class="prev"></a>'));
    $('.index-slide .view-content').append($('<a href="javascript:;" class="next"></a>'));
    $('.index-slide .frame.first').addClass('active');
  });

  function goPrev() {
    var current = $('.index-slide .frame.active');
    var prev = current.prev('.frame');
    if (prev.length) {
      prev.addClass('active');
      current.removeClass('active');
    }
  }

  function goNext() {
    var current = $('.index-slide .frame.active');
    var next = current.next('.frame');
    if (next.length) {
      next.addClass('active');
      current.removeClass('active');
    }
  }

  function cycle() {
    var current = $('.index-slide .frame.active');
    var next = current.next('.frame');
    if (next.length == 0) { next = $('.index-slide .frame.first'); }
    current.removeClass('active');
    next.addClass('active');
  }

  $(function() {
    $('.index-slide a.prev').click(goPrev);
    $('.index-slide a.next').click(goNext);
    setInterval(cycle, 5000);
  });

})(jQuery);
