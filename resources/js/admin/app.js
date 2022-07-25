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
        $('#item-product-variants').append(`<tr class="text-zinc-800">
            <td class="lg:px-6 py-3">
                <input readonly class="" value="${element.color}" name="variant[${index}][color]"></input>
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

$('#add-item').click(function(e) {
    let color = $('#color-item').val();
    let size = $('#size-item').val();

    color = handleData(color)
    size = handleData(size)

    var productVariant = {
        'color' : color,
        'size' : size
    }

    var valueVariant = $('#valueVariant').attr("value");
    var valueIdPruductvariant = $('#product-variant-id').attr("value");



    var variantCount = $('.variant').length;

    $('#item-product-variants').append(`<tr class="text-zinc-800">
        <td class="lg:px-6 py-3">
            <input readonly value="${productVariant.color}" name="variants[${variantCount}][color]" class="focus:ring-2 focus:ring-blue-500 focus:outline-none appearance-none form-select w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-0.5 px-4" />
        </td>
        <td class="lg:px-6 py-3">
            <input readonly value="${productVariant.size}" name="variants[${variantCount}][size]" class="focus:ring-2 focus:ring-blue-500 focus:outline-none appearance-none form-select w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-0.5 px-4" />
        </td>
        <td class="lg:px-6 py-3"> 
            <input type="text" name="variants[${variantCount}][sku]" class="focus:ring-2 focus:ring-blue-500 focus:outline-none appearance-none form-select w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-0.5 px-4"/>
        </td>
        <td class="lg:px-6 py-3">
            <input type="text" name="variants[${variantCount}][stock]" class="focus:ring-2 focus:ring-blue-500 focus:outline-none appearance-none form-select w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-0.5 px-4"/>
        </td>
        <td class="lg:px-6 py-3"> 
            <input type="text" name="variants[${variantCount}][unit_price]" class="focus:ring-2 focus:ring-blue-500 focus:outline-none appearance-none form-select w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-0.5 px-4"/>
        </td>
        <td class="lg:pl-6 py-3">
            <a onclick="return confirm('Are you sure you want to delete this variant?')" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                </svg>
            </a>
        </td>     
        <input type="hidden" name="variants[${variantCount}][product_id]" value="${valueVariant}" />
    </tr>`)

})

$(".remove-variant").click(function(e) {
    $(this).parents("tr").remove();
})

Alpine.start()

