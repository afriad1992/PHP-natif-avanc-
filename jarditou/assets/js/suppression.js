function suppression(id) {
    var confirmation = confirm("Voulez vous vraiment supprimer cet enregistrement ?");
    if (confirmation) {
        location= "suppression.php?id=" + id;
    }else{
        location="index.php";
    }
} 