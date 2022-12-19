function changeImage() {
 
 const photo = [];
photo[0] = "https://restolife.kz/upload/information_system_6/2/5/3/item_25320/small_information_items_property_32257.jpg";
photo[1] = "https://restolife.kz/upload/information_system_6/2/5/3/item_25320/small_information_items_property_32254.jpg";
photo[2] = "https://restolife.kz/upload/information_system_6/2/5/3/item_25320/small_information_items_property_32255.jpg";
for (let index = 0; index < 3; index++) {
     document.getElementById("arrow").src = photo[index];
    
    
 }
   
}