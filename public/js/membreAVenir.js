var rowpres=$('.row-pres');
var presentation=$('.presentation');
var avenir=$('.a-venir');
// nb de div
var nbpresentation=presentation.length;
// si il ya un nombre impair on rajoute une div
if(nbpresentation%2!=0)
{
    rowpres.append( "  <div class=\"col-lg-6 col-sm-6 text-center mb-4  a-venir \" > "+
        "<img  class=\"rounded-circle img-fluid d-block mx-auto\" src=\"http://placehold.it/200x200\" alt=\"membre a venir \" >"+
        "<h3>"+
        "<a href=\"index.php\" class=\"lien-membre\">Membre a venir </a>"+

        "</h3>"+

        "</div>");
}