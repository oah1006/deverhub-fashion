import './bootstrap';

let count = 0;

document.addEventListener("wheel", function (e) {
    var childSlider = document.getElementsByClassName('slider-child')
    var slider = document.getElementById('slider')

    if (e.deltaY < 0) {
       count--
        
       if (count < 0) {
            count = childSlider.length - 1
       }


       var heightSlider = childSlider[count].offsetTop
       slider.scrollTo(0, heightSlider) 


    }

    if (e.deltaY > 0) {
        count++

        if (count > childSlider.length - 1) {
            count = 0
        }

        

        var heightSlider = childSlider[count].offsetTop
        slider.scrollTo(0, heightSlider)   
        // console.log(count)
                                               
    }



//    console.log(childSlider)
   

});
