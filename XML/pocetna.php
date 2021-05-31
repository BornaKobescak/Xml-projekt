<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Pocetna</title>
    <link rel="stylesheet" href="str.css" type="text/css" media="all">
    <meta charset="UTF-8">
</head>
<body>
    <header>
        <ul>
            <li><a class="active" href="#home">POČETNA</a></li>
            <li><a href="http://localhost/xml/popis.html">POPIS</a></li>
            <li><a href="http://localhost/xml/kontakt.html">KONTAKT</a></li>
        </ul>
    </header>
    <br>
    <br>
    <br>
    
    <div class="center">
        <article class="art">
            <h2>Resident Evil Village zaigralo 3 milijuna igrača u svega par dana</h2>
            <h3>Novo izdanje Resident Evila je najbrže prodavano u višegodišnjoj povijesti ove 
               horor franšize koja je s 
               njim probila brojku od preko 100 milijuna prodanih igara kumulativno
            </h3>
            <img src="share.png" alt="vII" class="slika">
            <p>Capcom ima razloga za slavlje obzirom da je u samo tri dana od kada se nalazi u prodaji, <span>Resident Evil Village </span>
                ostvario jednako toliko milijuna prodanih kopija. 
            </p>
            <p>Kako smo pisali, riječ je o novom nastavku serijala koji nas 
                vodi u istočnu Europu u kojoj ćemo kao Ethan Winters pokušati pronaći otetu kćer i pritom se susresti s nevjerojatnim 
                čudovištima koja će nam utjerati strah u kosti. 

            </p>

        </article>
        <br>
        <br>
        <article class="art">
            <h2>Assassin's Creed Valhalla dobio dodatak Wrath of the Druids</h2>
            <h3>Vikinška akcija Assassin's Creed Valhalla s novim dodatkom Wrath of the Druids igrače seli u Irsku gdje ih 
                očekuju nove avanture u masivnom svijetu prepunom novih opasnosti i nagrada
            </h3>
            <img src="val.jpg" alt="valhala" class="slika">
            <p>Akcijska avantura <span>Assassin's Creed Valhalla</span> je sama po sebi masivna, no vjerujemo da oni kojima se dopala, već mjesecima vrte
                palčeve i čekaju nove avanture Eivora koje su najavljene u dodatku Wrath of the Druids.
            </p>
            <p> 
                Spomenuti je kratkotrajno bio odgođen, no od jučer je dostupan za sve platforme na kojima se Valhalla pojavila. 

            </p>

        </article>

        <article class="art">
            <h2>Najprodavaniji naslovi na Steamu (10.05. - 16.05.)</h2>
            <h3>Ljestvica najbolje prodavanih naslova na Steamu u proteklom tjednu je u znaku svježih 
                igara koje su ovaj put nadmašile one na promotivnim akcijama uz velike popuste
            </h3>
            <img src="steam.jpg" alt="steam" class="slika">
            <p>Sonyjeva odluka da ekskluzive za PlayStation polako prebacuje na PC je očito bila više no ispravna jer se na
                 ljestvici pojavio i <span>Days Gone</span>, druga igra ranije vezana uz PlayStation koju će od sutra imati priliku zaigrati i 
                 vlasnici PC-a, dok neobični <span>Biomutant</span> očito već sada ima svoju publiku obzirom da ga očekujemo tek idući utorak. 
                 I za kraj, na posljednjem mjestu, veliki <span>Grant Theft Auto V : Premium Edition</span>koji se 
                na ovoj ljestvici pojavljuje čak i kada nije na popustu, iako je riječ o igri staroj preko šest godina.
            </p>
            
            <button type="button" onclick="loadDoc()">Otkrij top 10</button>
<br><br>
<table id="demo"></table>

<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      myFunction(this);
    }
  };
  xhttp.open("GET", "top.xml", true);
  xhttp.send();
}
function myFunction(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var table="<tr><th>Mjesto</th><th>Naslov</th></tr>";
  var x = xmlDoc.getElementsByTagName("Igra");
  for (i = 0; i <x.length; i++) { 
    table += "<tr><td>" +
    x[i].getElementsByTagName("Mjesto")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("Naslov")[0].childNodes[0].nodeValue +
    "</td></tr>";
  }
  document.getElementById("demo").innerHTML = table;
}
</script>

        </article>
        <p>IZVOR:BUG.HR</p>
        

    </div>
    <br><br><br>
    
    <footer>
        <p>© Borna Kobešćak 2021</p>
    </footer>    
    
    



</body>
</html>
