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
                    $('.tags').append("<span class='px-1 tag py-1 bg-yellow-400 rounded-lg'>" + tag +  "</span>")
                    arrayColor.push(tag);
                    
                    console.log(arrayColor)

                    $(this).val("");
                }
            }
        })
    
        $('.container-tags-input').on("click", function() {
            $(this).parent("p").remove(100)
        })
    
})