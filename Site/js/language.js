    var a2 = $('a').eq(2).text();
    var a3 = $('a').eq(3).text();
    var a4 = $('a').eq(4).text();
    var a5 = $('a').eq(5).text();
    var titleH1 = $("#titleH1").text();
    var titleH2 = $("#titleH2").text();
    var cta = $("#cta1").text();
    // About
    var ch2 = $("#ch2").text();
    var abt1 = $("#abouttext1").text();
    var abt2 = $("#abouttext2").text()
    var abt3 = $("#abouttext3").text();
    var who1 = $("#whois1").text();
    var who2 = $("#whois2").text();
    // Work
    var ch3 = $("#ch3").text();
    var br1 = $("#branding1").text();
    var br2 = $("#branding2").text();
    var de1 = $("#design1").text();
    var de2 = $("#design2").text();
    var cr1 = $("#creation1").text();
    var cr2 = $("#creation2").text();
    // Form
    var form1 = $("#form1").text();
    var form2 = $("#form2").text();
    var form3 = $("#form3").text();
    var form4 = $("#form4").text();
    var form5 = $("#form5").text();
    var submit = $("#submit").text();
    var tel = $("#telephone").attr("placeholder");
    var fn = $("#fname").attr("placeholder");
    var ln = $("#lname").attr("placeholder");
    var em = $("#email").attr("placeholder");
    var msg = $("#message").attr("placeholder");
    var hr1 = $("#hire1").text();
    var hr2 = $("#hire2").text();

    function changeLang() {
      lang = $("#language").text();
      if (lang == "RO") $("#language").text("EN");
      else $("#language").text("RO");
      // Proiecte
      var ch4 = $("#ch4").text();
      if (lang == "EN") {
        $('a').eq(2).fadeOut(function () {
          $(this).text(a2)
        }).fadeIn();
        $('a').eq(3).fadeOut(function () {
          $(this).text(a3)
        }).fadeIn();
        $('a').eq(4).fadeOut(function () {
          $(this).text(a4)
        }).fadeIn();
        $('a').eq(5).fadeOut(function () {
          $(this).text(a5)
        }).fadeIn();
        $('a').eq(6).fadeOut(function () {
          $(this).text("Contact")
        }).fadeIn();
        $('#language').fadeOut(function () {
          $(this).text("RO")
        }).fadeIn();
        $('#titleH1').fadeOut(function () {
          $(this).text(titleH1)
        }).fadeIn();
        $('#titleH2').fadeOut(function () {
          $(this).text(titleH2)
        }).fadeIn();
        $('#cta1').fadeOut(function () {
          $(this).text(cta)
        }).fadeIn();
        // About
        $("#ch2").text(ch2);
        $("#ch2").css("margin-left", "0px");
        $("#abouttext1").text(abt1);
        $("#abouttext2").text(abt2);
        $("#abouttext3").text(abt3);
        $("#whois1").text(who1);
        $("#whois2").text(who2);
        // Work
        $("#ch3").text(ch3);
        $("#branding1").text(br1);
        $("#branding2").text(br2);
        $("#design1").text(de1);
        $("#design2").text(de2);
        $("#creation1").text(cr1);
        $("#creation2").text(cr2);
        // Proiecte
        $("#ch4").text(ch4);
        // Hire
        $("#form1").text(form1);
        $("#form2").text(form2);
        $("#form3").text(form3);
        $("#form4").text(form4);
        $("#form5").text(form5);
        $("#submit").text(submit);
        $("#telephone").attr("placeholder", tel);
        $("#fname").attr("placeholder", fn);
        $("#lname").attr("placeholder", ln);
        $("#email").attr("placeholder", em);
        $("#message").attr("placeholder", msg);
        $("#hire1").text(hr1);
        $("#hire2").text(hr2);
      }
      if (lang == "RO") {
        // Home
        $('a').eq(2).fadeOut(function () {
          $(this).text("Acasa")
        }).fadeIn();
        $('a').eq(3).fadeOut(function () {
          $(this).text("Despre")
        }).fadeIn();
        $('a').eq(4).fadeOut(function () {
          $(this).text("Competente")
        }).fadeIn();
        $('a').eq(5).fadeOut(function () {
          $(this).text("Proiecte")
        }).fadeIn();
        $('a').eq(6).fadeOut(function () {
          $(this).text("Contact")
        }).fadeIn();
        $('#language').fadeOut(function () {
          $(this).text("EN")
        }).fadeIn();
        $('#titleH1').fadeOut(function () {
          $(this).text("Solutii web.")
        }).fadeIn();
        $('#titleH2').fadeOut(function () {
          $(this).text("Construim interfete si site-uri web uimitoare.")
        }).fadeIn();
        $('#cta1').fadeOut(function () {
          $(this).text("Angajeaza-ma")
        }).fadeIn();
        // About
        $("#ch2").text("Despre");
        $("#ch2").css("margin-left", "4px");
        $("#abouttext1").text("Sunt un dezvoltator de tehnologii Front-End, cu resedinta in Bucuresti. Ma ocup cu crearea imaginii brandurilor si cu dezvoltarea site-urilor web.");
        $("#abouttext2").text("In cei doi ani de munca, am reusit sa lucrez, ca freelancer, cu diferite firme locale.")
        $("#abouttext3").text("Sunt mereu interesat sa discut si sa implementez idei noi.");
        $("#whois1").text("Salut");
        $("#whois2").text("Sunt Andrei.");
        // Work
        $("#ch3").text("Competente");
        $("#branding1").text("Imaginea Brandului");
        $("#branding2").text("Crearea experientei vizuale a brandului. Pasul in care ideea prinde forma si culoare.");
        $("#branding1").css("letter-spacing", "-.85px");
        $("#design1").text("Design-ul paginii");
        $("#design2").text("Combinam idei unice intr-o schita care contine toate cerintele dorite");
        $("#creation1").text("Crearea paginii");
        $("#creation2").text("Aducem conceptul la viata, implementand designul si pentru utilizatorii de telefoane");
        // Proiecte
        $("#ch4").text("Proiecte");
        // Hire
        $("#form1").text("Prenume:");
        $("#form2").text("Nume:");
        $("#form3").text("Mail:");
        $("#form4").text("Telefon:");
        $("#form5").text("Mesaj:");
        $("#submit").text("Trimite");
        $("#telephone").attr("placeholder", "Numar");
        $("#fname").attr("placeholder", "Prenume");
        $("#lname").attr("placeholder", "Nume");
        $("#email").attr("placeholder", "Adresa de mail");
        $("#message").attr("placeholder", "Mesajul tau");
        $("#hire1").text("Formular");
        $("#hire2").text("Angajare");
      }
    };