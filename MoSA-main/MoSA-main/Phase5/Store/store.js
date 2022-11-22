
$("input[name='expiry-data']").mask("00 / 00");
var slideNum = 0;
var i;



function startSlides() {
    var i;
    var images = document.getElementsByClassName("theSlides");
    


    
    for(i = 0; i < images.length; i++) {
        images[i].style.display = "none";
        
    }
    slideNum++;
	

    if (slideNum > images.length) {
        slideNum = 1;
    }
    images[slideNum-1].style.display = "block";
    
    setTimeout(startSlides, 5000);
    


}

function shoppingAvailable() {
  var qtyInputs = document.getElementsByClassName('cart-qty-input')
  for (i = 0; i < qtyInputs.length; i++) {
    var input = qtyInputs[i]
    input.addEventListener('change', qtyChange)
  }

  var removeCartBtns = document.getElementsByClassName('btn-danger')
  for (i = 0; i< removeCartBtns.length; i++) {
    var btn = removeCartBtns[i]
    btn.addEventListener('click', removeItem)
  }

  var addToCartBtn = document.getElementsByClassName('add-to-cart')
  for (i = 0; i < addToCartBtn.length; i++) {
    var btn = addToCartBtn[i]
    btn.addEventListener('click', addToCartEvent)
  }
  document.getElementsByClassName('purchase-button')[0].addEventListener('click', purchase)
}

function purchase() {
  alert('Transaction complete. Thank you for your order')
  var cartItems = document.getElementsByClassName('cart-items')[0]
  while (cartItems.hasChildNodes()) {
    cartItems.removeChild(cartItems.firstChild)
  }
  updateTotalCost();
}

function removeItem(event) {
  var btnClick = event.target
  btnClick.parentElement.parentElement.remove()
  updateTotalCost();
}


function qtyChange(event) {
  var input = event.target
  if (isNaN(input.value) || input.value <= 0) {
    input.value = 1;
  }
  updateTotalCost();
}



function addToCartEvent(event) {
  var button = event.target
  var item = button.parentElement.parentElement
  var name = item.getElementsByClassName('item-name')[0].innerText;
  var price = item.getElementsByClassName('item-price')[0].innerText;
  var imgSrc = item.getElementsByClassName('item-image')[0].src;
  addItemToCart(name, price, imgSrc);
  updateTotalCost();
}

function addItemToCart(name, price, imgSrc) {
  var cartSlot = document.createElement('div')
  cartSlot.classList.add('cart-slot')
  var cartItems = document.getElementsByClassName('cart-items')[0]
  var itemNames = cartItems.getElementsByClassName('cart-item-name')
  for (i = 0; i < itemNames.length; i++) {
    if (itemNames[i].innerText == name) {
      alert('This item is already added to the cart')
      return
    }
  }

  var cartSlotContent = `
    <div class="cart-item cart-column">
      <img class="cart-item-image" src="${imgSrc}" width="50" height="50">
      <span class="cart-item-name">${name}</span>
    </div>
    <span class="cart-price cart-column">${price}</span>
    <div class="cart-quantity cart-column">
      <input class="cart-qty-input" type="number" value="1">
      <button class="btn btn-danger" type="button">REMOVE</button>
    </div>`

cartSlot.innerHTML = cartSlotContent
cartItems.append(cartSlot)
cartSlot.getElementsByClassName('btn-danger')[0].addEventListener('click', removeItem)
cartSlot.getElementsByClassName('cart-qty-input')[0].addEventListener('change', qtyChange)
}


function updateTotalCost() {
  var itemContainer = document.getElementsByClassName('cart-items')[0]
  var cartSlots = itemContainer.getElementsByClassName('cart-slot')
  var total = 0;
  console.log(cartSlots.length)
  for (i = 0; i < cartSlots.length; i++) {
    var cartSlot = cartSlots[i]
    var priceText = cartSlot.getElementsByClassName('cart-price')[0]
    console.log(priceText)
    var quantityText = cartSlot.getElementsByClassName('cart-qty-input')[0]
    var price = parseFloat(priceText.innerText.replace('$', ''))
    var qty = quantityText.value
    total = total + (price * qty)

  }
 
  total = Math.round(total * 100) / 100
  console.log(total)
  
  document.getElementsByClassName('total-cost-price')[0].innerText = '$' + total
}



function checkLog() {
  window.location.href = "login.php";

}