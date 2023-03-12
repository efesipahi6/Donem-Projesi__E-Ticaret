import headerFunc from "./header.js";
import productsFunc from "./products.js";
import searchFunc from "./search.js";

//! localStorage ürün ekleme başlangıç
(async function () {
  const photos = await fetch("js/data.json");
  const data = await photos.json();

  data ? localStorage.setItem("products", JSON.stringify(data)) : [];
  productsFunc(data);
  searchFunc(data);
})();
//! localStorage ürün ekleme bitiş

const products = localStorage.getItem("products");
const cartItems = document.querySelector(".header-cart-count");

cartItems.innerHTML = localStorage.getItem("cart")
  ? JSON.parse(localStorage.getItem("cart")).length
  : "0";