
const $shareBlock = $('#shareBlock');

$(document).mouseup(e => {
   if (!$shareBlock.is(e.target) // if the target of the click isn't the container...
   && $shareBlock.has(e.target).length === 0) // ... nor a descendant of the container
   {
     $shareBlock.removeClass('share-visible');
     $('.content').removeClass('blur');
  }
 });
$(document).ready(function () {
    $('#shareBtn').on('click', function () {
        $('#shareBlock').toggleClass('share-visible');
        $('.content').addClass('blur');
    });
});

var clipboard = new ClipboardJS('.copyBtn');

clipboard.on('success', () => {
    $('#copyBtn').addClass('copyed');
});