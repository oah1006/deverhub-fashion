import '../bootstrap';
import Alpine from 'alpinejs'
import { forEach } from 'lodash';
 
window.Alpine = Alpine
 
function handleData(data) {
    if (data == '') {
        return []
    } else {
        return data.split(', ')
    }
}

$('#auto-render').click(function() {
    let color = $('#color').val()
    let size = $('#size').val()

    color = handleData(color)
    size = handleData(size)

    // let productVariants = $.merge(color,size)
    // console.log(productVariants)

    var productVariants = []


    for (let i = 0; i < color.length; i++) {
        for (let j = 0; j < size.length; j++) {
            productVariants.push({ color: color[i], size: size[j] });
        }
    }

    console.log(productVariants)
    if (productVariants.length == 0) {
        return
    }

    $('#item-product-variants').html('')
    productVariants.forEach(function(element, index) {
        $('#item-product-variants').append(`<tr class="text-gray-600">
        <td class="lg:px-6 py-3">
            <input readonly value="${element.color}" name="variant[${index}][color]"></input>
        </td>
        <td class="lg:px-6 py-3">
            <input readonly value="${element.size}" name="variant[${index}][size]"></input>
        </td>
        <td class="lg:px-6 py-3"> 
            <input type="text" name="variant[${index}][sku]" class="focus:ring-2 focus:ring-blue-500 focus:outline-none appearance-none form-select w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-0.5 px-4"/>
        </td>
        <td class="lg:px-6 py-3">
            <input type="text" name="variant[${index}][stock]" class="focus:ring-2 focus:ring-blue-500 focus:outline-none appearance-none form-select w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-0.5 px-4"/>
        </td>
        <td class="lg:px-6 py-3"> 
            <input type="text" name="variant[${index}][unit_price]" class="focus:ring-2 focus:ring-blue-500 focus:outline-none appearance-none form-select w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-0.5 px-4"/>
        </td>
        
    </tr>`)
    }) 
})



Alpine.start()

