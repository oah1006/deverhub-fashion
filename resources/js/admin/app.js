import '../bootstrap';
import Alpine from 'alpinejs'
 
window.Alpine = Alpine
 
// 

Alpine.start()

$(document).ready(function() {

    var arrayColor = []

        $('.tags-input').keypress(function(e) {
            var key = e.which;
            if (key == 13 || key == 44) {
                e.preventDefault();
                var tag = $(this).val();
    
                if (tag.length > 0) {
                    $('.tags').append("<div class='tag px-1 tag py-1 bg-yellow-400 rounded-lg flex'><svg xmlns='http://www.w3.org/2000/svg' class='h-6 w-6' fill='none' viewBox='0 0 24 24' stroke='currentColor' stroke-width='2'><path stroke-linecap='round' stroke-linejoin='round' d='M6 18L18 6M6 6l12 12' /></svg><p>Hello</p></div>")
                    arrayColor.push(tag)
                    
                    console.log(arrayColor)

                    $(this).val("")
                }
            }
        })
    
        $('.tags').on("click", function() {
            $('.tag').remove();
        })
    
})