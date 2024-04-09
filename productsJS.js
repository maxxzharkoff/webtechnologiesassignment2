// Author: Maxim Zharkov
// Version: 1.0
// Date: 2023-11-06
// Description: The script for the products page
// Last modified: 2023-11-06

// Declaring the array with the product info

const productsInfoArray = [['UCLan Hoodie', 'Purple', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' Only £39.99', 'images/items/hoodies/hoodie (1).jpg'],
    ['UCLan Hoodie', 'Light Blue', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' Only £39.99', 'images/items/hoodies/hoodie (2).jpg'],
    ['UCLan Hoodie', 'Green', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' Only £39.99', 'images/items/hoodies/hoodie (3).jpg'],
    ['UCLan Hoodie', 'Dark Grey', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' Only £39.99', 'images/items/hoodies/hoodie (4).jpg'],
    ['UCLan Hoodie', 'Black', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' Only £39.99', 'images/items/hoodies/hoodie (5).jpg'],
    ['UCLan Hoodie', 'Salmon', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' Only £39.99', 'images/items/hoodies/hoodie (6).jpg'],
    ['UCLan Hoodie', 'Burgundy', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' Only £39.99', 'images/items/hoodies/hoodie (7).jpg'],
    ['UCLan Hoodie', 'Light Grey', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' Only £39.99', 'images/items/hoodies/hoodie (8).jpg'],
    ['UCLan Hoodie', 'Slate Blue', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' Only £39.99', 'images/items/hoodies/hoodie (9).jpg'],
    ['UCLan Hoodie', 'Orange', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' Only £39.99', 'images/items/hoodies/hoodie (10).jpg'],
    ['UCLan Hoodie', 'Teal', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' Only £39.99', 'images/items/hoodies/hoodie (11).jpg'],
    ['UCLan Hoodie', 'Navy', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' Only £39.99', 'images/items/hoodies/hoodie (12).jpg'],
    ['UCLan Hoodie', 'Orange', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' Only £39.99', 'images/items/hoodies/hoodie (13).jpg'],
    ['UCLan Hoodie', 'Cream', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' Only £39.99', 'images/items/hoodies/hoodie (14).jpg'],
    ['UCLan Hoodie', 'Lime', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' Only £39.99', 'images/items/hoodies/hoodie (15).jpg'],
    ['UCLan Hoodie', 'Off Blue', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' Only £39.99', 'images/items/hoodies/hoodie (16).jpg'],
    ['UCLan Hoodie', 'Red', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' Only £39.99', 'images/items/hoodies/hoodie (17).jpg'],
    ['UCLan Hoodie', 'Charcoal', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' Only £39.99', 'images/items/hoodies/hoodie (18).jpg'],
    ['UCLan Hoodie', 'Navy Blue', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' Only £39.99', 'images/items/hoodies/hoodie (19).jpg'],
    ['UCLan Hoodie', 'Lighter Grey', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' Only £39.99', 'images/items/hoodies/hoodie (20).jpg'],
    ['UCLan Hoodie', 'New Blue', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' Only £39.99', 'images/items/hoodies/hoodie (21).jpg'],
    ['UCLan Hoodie', 'Forest Green', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' Only £39.99', 'images/items/hoodies/hoodie (22).jpg'],
    ['UCLan Hoodie', 'Ocean Blue', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' Only £39.99', 'images/items/hoodies/hoodie (23).jpg'],
    ['UCLan Hoodie', 'Pink', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' Only £39.99', 'images/items/hoodies/hoodie (24).jpg'],
    ['UCLan Hoodie', 'Orange New', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' Only £39.99', 'images/items/hoodies/hoodie (25).jpg'],
    ['UCLan Hoodie', 'Black', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' Only £39.99', 'images/items/hoodies/hoodie (26).jpg'],
    ['UCLan Hoodie', 'Light Off Grey', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' Only £39.99', 'images/items/hoodies/hoodie (27).jpg'],
    ['UCLan Hoodie', 'Rusty Red', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' Only £39.99', 'images/items/hoodies/hoodie (28).jpg'],
    ['UCLan Hoodie', 'Slate Grey', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' Only £39.99', 'images/items/hoodies/hoodie (29).jpg'],
    ['UCLan Hoodie', 'Bright Green', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' Only £39.99', 'images/items/hoodies/hoodie (30).jpg'],
    ['UCLan Hoodie', 'Bright Pink', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' Only £39.99', 'images/items/hoodies/hoodie (31).jpg'],
    ['UCLan Hoodie', 'Burgundy New', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' Only £39.99', 'images/items/hoodies/hoodie (32).jpg'],
    ['UCLan Hoodie', 'Navy New', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' Only £39.99', 'images/items/hoodies/hoodie (33).jpg'],
    ['UCLan Hoodie', 'Bright Green', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' Only £39.99', 'images/items/hoodies/hoodie (34).jpg'],
    ['UCLan Logo Jumper', 'Purple', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' Only £29.99', 'images/items/jumpers/jumper (1).jpg'],
    ['UCLan Logo Jumper', 'Rusty Red', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' Only £29.99', 'images/items/jumpers/jumper (2).jpg'],
    ['UCLan Logo Jumper', 'Water Blue', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' Only £29.99', 'images/items/jumpers/jumper (3).jpg'],
    ['UCLan Logo Jumper', 'White', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' Only £29.99', 'images/items/jumpers/jumper (4).jpg'],
    ['UCLan Logo Jumper', 'Pink', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' Only £29.99', 'images/items/jumpers/jumper (5).jpg'],
    ['UCLan Logo Jumper', 'Black', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' Only £29.99', 'images/items/jumpers/jumper (6).jpg'],
    ['UCLan Logo Jumper', 'Old Blue', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' Only £29.99', 'images/items/jumpers/jumper (7).jpg'],
    ['UCLan Logo Jumper', 'Dark Grey ', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' Only £29.99', 'images/items/jumpers/jumper (8).jpg'],
    ['UCLan Logo Jumper', 'Red', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' Only £29.99', 'images/items/jumpers/jumper (9).jpg'],
    ['UCLan Logo Jumper', 'Brown', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' Only £29.99', 'images/items/jumpers/jumper (10).jpg'],
    ['UCLan Logo Jumper', 'Green', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' Only £29.99', 'images/items/jumpers/jumper (11).jpg'],
    ['UCLan Logo Jumper', 'Dark Red', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' Only £29.99', 'images/items/jumpers/jumper (12).jpg'],
    ['UCLan Logo Jumper', 'Yellow', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' Only £29.99', 'images/items/jumpers/jumper (13).jpg'],
    ['UCLan Logo Jumper', 'Light Grey', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' Only £29.99', 'images/items/jumpers/jumper (14).jpg'],
    ['UCLan Logo Jumper', 'Light Green', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' Only £29.99', 'images/items/jumpers/jumper (15).jpg'],
    ['UCLan Logo Jumper', 'Old Red', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' Only £29.99', 'images/items/jumpers/jumper (16).jpg'],
    ['UCLan Logo Jumper', 'Light Purple', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' Only £29.99', 'images/items/jumpers/jumper (17).jpg'],
    ['UCLan Logo Jumper', 'Slate Blue', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' Only £29.99', 'images/items/jumpers/jumper (18).jpg'],
    ['UCLan Logo Jumper', 'Real Red', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' Only £29.99', 'images/items/jumpers/jumper (19).jpg'],
    ['UCLan Logo Jumper', 'Old Pink', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' Only £29.99', 'images/items/jumpers/jumper (20).jpg'],
    ['UCLan Logo Jumper', 'Slate Grey', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' Only £29.99', 'images/items/jumpers/jumper (21).jpg'],
    ['UCLan Logo Jumper', 'Bright Green', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' Only £29.99', 'images/items/jumpers/jumper (22).jpg'],
    ['UCLan Logo Jumper', 'Teal', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' Only £29.99', 'images/items/jumpers/jumper (23).jpg'],
    ['UCLan Logo Jumper', 'Sky Blue', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' Only £29.99', 'images/items/jumpers/jumper (24).jpg'],
    ['UCLan Logo Jumper', 'Sunshine Pink', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' Only £29.99', 'images/items/jumpers/jumper (25).jpg'],
    ['UCLan Logo Jumper', 'Bronze', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' Only £29.99', 'images/items/jumpers/jumper (26).jpg'],
    ['UCLan Logo Jumper', 'Olive Green', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' Only £29.99', 'images/items/jumpers/jumper (27).jpg'],
    ['UCLan Logo Jumper', 'Bright White Green', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' Only £29.99', 'images/items/jumpers/jumper (28).jpg'],
    ['UCLan Logo Jumper', 'Navy Blue', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' Only £29.99', 'images/items/jumpers/jumper (29).jpg'],
    ['UCLan Logo Jumper', 'Rusty Orange', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' Only £29.99', 'images/items/jumpers/jumper (30).jpg'],
    ['UCLan Logo Jumper', 'Bright Orange', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' Only £29.99', 'images/items/jumpers/jumper (31).jpg'],
    ['UCLan Logo Jumper', 'Sky Purple', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' Only £29.99', 'images/items/jumpers/jumper (32).jpg'],
    ['UCLan Logo Jumper', 'Really Red', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' Only £29.99', 'images/items/jumpers/jumper (33).jpg'],
    ['UCLan Logo Jumper', 'Plum Purple', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' Only £29.99', 'images/items/jumpers/jumper (34).jpg'],
    ['UCLan Logo Jumper', 'Dark Purple', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' Only £29.99', 'images/items/jumpers/jumper (35).jpg'],
    ['UCLan Logo Jumper', 'Vibrant Red', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' Only £29.99', 'images/items/jumpers/jumper (36).jpg'],
    ['UCLan Logo Jumper', 'Ocean Blue', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' Only £29.99', 'images/items/jumpers/jumper (37).jpg'],
    ['UCLan Logo Jumper', 'Cream', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' Only £29.99', 'images/items/jumpers/jumper (38).jpg'],
    ['UCLan Logo Jumper', 'Lighter Blue', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' Only £29.99', 'images/items/jumpers/jumper (39).jpg'],
    ['UCLan Logo Jumper', 'Light Grey', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' Only £29.99', 'images/items/jumpers/jumper (40).jpg'],
    ['UCLan Logo Tshirt', 'Navy Blue New', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' Only £19.99', 'images/items/tshirts/tshirt (1).jpg'],
    ['UCLan Logo Tshirt', 'Rusty Red New', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' Only £19.99', 'images/items/tshirts/tshirt (2).jpg'],
    ['UCLan Logo Tshirt', 'Burgundy', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' Only £19.99', 'images/items/tshirts/tshirt (3).jpg'],
    ['UCLan Logo Tshirt', 'Pink', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' Only £19.99', 'images/items/tshirts/tshirt (4).jpg'],
    ['UCLan Logo Tshirt', 'Teal', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' Only £19.99', 'images/items/tshirts/tshirt (5).jpg'],
    ['UCLan Logo Tshirt', 'Black', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' Only £19.99', 'images/items/tshirts/tshirt (6).jpg'],
    ['UCLan Logo Tshirt', 'Old Red', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' Only £19.99', 'images/items/tshirts/tshirt (7).jpg'],
    ['UCLan Logo Tshirt', 'Grey', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' Only £19.99', 'images/items/tshirts/tshirt (8).jpg'],
    ['UCLan Logo Tshirt', 'Red', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' Only £19.99', 'images/items/tshirts/tshirt (9).jpg'],
    ['UCLan Logo Tshirt', 'Brown', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' Only £19.99', 'images/items/tshirts/tshirt (10).jpg'],
    ['UCLan Logo Tshirt', 'Dark Purple', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' Only £19.99', 'images/items/tshirts/tshirt (11).jpg'],
    ['UCLan Logo Tshirt', 'Yellow', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' Only £19.99', 'images/items/tshirts/tshirt (12).jpg'],
    ['UCLan Logo Tshirt', 'Mustard Yellow', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' Only £19.99', 'images/items/tshirts/tshirt (13).jpg'],
    ['UCLan Logo Tshirt', 'Dark Grey', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' Only £19.99', 'images/items/tshirts/tshirt (14).jpg'],
    ['UCLan Logo Tshirt', 'Dark Green', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' Only £19.99', 'images/items/tshirts/tshirt (15).jpg'],
    ['UCLan Logo Tshirt', 'Bright Green', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' Only £19.99', 'images/items/tshirts/tshirt (16).jpg'],
    ['UCLan Logo Tshirt', 'Olive Green', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' Only £19.99', 'images/items/tshirts/tshirt (17).jpg'],
    ['UCLan Logo Tshirt', 'Dark Grey', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' Only £19.99', 'images/items/tshirts/tshirt (18).jpg'],
    ['UCLan Logo Tshirt', 'Orange', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' Only £19.99', 'images/items/tshirts/tshirt (19).jpg'],
    ['UCLan Logo Tshirt', 'Purple', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' Only £19.99', 'images/items/tshirts/tshirt (20).jpg'],
    ['UCLan Logo Tshirt', 'Slate Blue', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' Only £19.99', 'images/items/tshirts/tshirt (21).jpg'],
    ['UCLan Logo Tshirt', 'Bright Pink', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' Only £19.99', 'images/items/tshirts/tshirt (22).jpg'],
    ['UCLan Logo Tshirt', 'Brightly Green', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' Only £19.99', 'images/items/tshirts/tshirt (23).jpg'],
    ['UCLan Logo Tshirt', 'Lime Green', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' Only £19.99', 'images/items/tshirts/tshirt (24).jpg'],
    ['UCLan Logo Tshirt', 'Ocean Blue', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' Only £19.99', 'images/items/tshirts/tshirt (25).jpg'],
    ['UCLan Logo Tshirt', 'Dark Red', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' Only £19.99', 'images/items/tshirts/tshirt (26).jpg'],
    ['UCLan Logo Tshirt', 'Another Green', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' Only £19.99', 'images/items/tshirts/tshirt (27).jpg'],
    ['UCLan Logo Tshirt', 'Slate Grey', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' Only £19.99', 'images/items/tshirts/tshirt (28).jpg'],
    ['UCLan Logo Tshirt', 'Bright Orange', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' Only £19.99', 'images/items/tshirts/tshirt (29).jpg'],
    ['UCLan Logo Tshirt', 'Another Purple', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' Only £19.99', 'images/items/tshirts/tshirt (30).jpg'],
    ['UCLan Logo Tshirt', 'Real Red', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' Only £19.99', 'images/items/tshirts/tshirt (31).jpg'],
    ['UCLan Logo Tshirt', 'Brilliant Blue', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' Only £19.99', 'images/items/tshirts/tshirt (32).jpg'],
    ['UCLan Logo Tshirt', 'Cream', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' Only £19.99', 'images/items/tshirts/tshirt (33).jpg'],
    ['UCLan Logo Tshirt', 'Teal Blue', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' Only £19.99', 'images/items/tshirts/tshirt (34).jpg'],
    ['UCLan Logo Tshirt', 'White', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' Only £19.99', 'images/items/tshirts/tshirt (35).jpg']];


window.onload = function () {

    // Creating navigation


    let navigationP = document.createElement("p");
    navigationP.textContent = "Products   > ";
    navigationP.id = "navigationP";

    let navigationTShirts = document.createElement("a");
    navigationTShirts.textContent = "T-Shirts ";
    navigationTShirts.href = "#first-tshirt";
    navigationTShirts.className = "navLinks";
    navigationTShirts.id = "TShirtNavLink";

    let navigationHoodies = document.createElement("a");
    navigationHoodies.textContent = "Hoodies ";
    navigationHoodies.href = "#first-hoodie";
    navigationHoodies.className = "navLinks";

    let navigationJumpers = document.createElement("a");
    navigationJumpers.textContent = "Jumpers";
    navigationJumpers.href = "#first-jumper";
    navigationJumpers.className = "navLinks";

    navigationP.appendChild(navigationTShirts);
    navigationP.appendChild(navigationHoodies);
    navigationP.appendChild(navigationJumpers);

    let navContainer = document.getElementById("navContainer");
    navContainer.appendChild(navigationP);

    // Create and fill the array products with product objects

    let products = [];

    for (let i = 0; i < productsInfoArray.length; i++) {
        let product = {
            name: productsInfoArray[i][0],
            color: productsInfoArray[i][1],
            description: productsInfoArray[i][2],
            price: productsInfoArray[i][3],
            imgRef: productsInfoArray[i][4],
            quantity: 1
        };
        products.push(product);
    }


    // Set up the objects on the page in containers


    for (let i = 0; i < products.length; i++) {
        // Defining the div and elements of the div
        let itemBox = document.createElement('div');
        let itemImage = document.createElement('img');
        let itemName = document.createElement('h3');
        let itemColor = document.createElement('h4');
        let itemDesc = document.createElement('p');
        let itemPrice = document.createElement('p');
        let readMoreLink = document.createElement('a');
        let buyButton = document.createElement("button");

        // Setting the values

        itemBox.className = 'item-box';

        // Adding the image
        itemImage.src = products[i].imgRef;
        itemImage.alt = "Image of " + products[i].name;
        itemBox.appendChild(itemImage);

        // Adding the name of the product
        itemName.textContent = products[i].name;
        itemBox.appendChild(itemName);

        // Adding the color of the item
        itemColor.textContent = products[i].color;
        itemBox.appendChild(itemColor);

        // Setting up the read more link
        readMoreLink.textContent = "Read more";
        readMoreLink.href = "item.html";
        readMoreLink.class = "readMoreLink";
        readMoreLink.id = products[i].imgRef;

        // Setting up an event listener for the function to track which item has been clicked

        let productObject = products[i];

        function linkPressed() {
            sessionStorage["productPressed"] = JSON.stringify(productObject);
        }

        readMoreLink.addEventListener("click", linkPressed);

        // Adding the description of the item
        itemDesc.textContent = products[i].description + " ";
        itemDesc.appendChild(readMoreLink);
        itemBox.appendChild(itemDesc);

        // Adding the price of the item
        itemPrice.textContent = products[i].price;
        itemBox.appendChild(itemPrice);

        // Adding a button at the end
        buyButton.id = "buy-button";
        buyButton.textContent = "Add to cart";


        // Setting up an event listener for adding an item to cart and saving that info in the
        // local storage

        function addToCartPressed() {
            let cartItems = JSON.parse(window.localStorage["cartItems"]);
            let exists = cartItems.some(existingProduct =>
                existingProduct.imgRef === productObject.imgRef);
            if (exists) {
                let indexOfExistingProduct = cartItems.findIndex(existingProduct =>
                    productObject.imgRef === existingProduct.imgRef);
                cartItems[indexOfExistingProduct].quantity += 1;
                window.localStorage["cartItems"] = JSON.stringify(cartItems);
            } else {
                cartItems.push(productObject);
                window.localStorage["cartItems"] = JSON.stringify(cartItems);
            }
        }

        buyButton.addEventListener("click", function () {
            addToCartPressed();
            alert(productObject.name + " has been added to cart.");
        })
        itemBox.appendChild(buyButton);

        if (products[i].imgRef === "images/items/hoodies/hoodie (1).jpg") {
            itemBox.id = "first-hoodie";
        }

        if (products[i].imgRef === "images/items/jumpers/jumper (1).jpg") {
            itemBox.id = "first-jumper";
        }

        if (products[i].imgRef === "images/items/tshirts/tshirt (1).jpg") {
            itemBox.id = "first-tshirt";
        }

        // Appending the whole item box to the document body
        const itemsContainer = document.getElementById("items-container");
        itemsContainer.appendChild(itemBox);
    }
};

// Get the button
let topButton = document.getElementById("topBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        topButton.style.display = "block";
    } else {
        topButton.style.display = "none";
    }
};

// When the user clicks on the button, scroll to the top of the document
topButton.onclick = function () {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE, and Opera
};

