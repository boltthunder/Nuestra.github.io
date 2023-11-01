import {
    EBMagalona,
    Victorias,
    Valladolid,
    Toboso,
    Talisay,
    Sipalay,
    Silay,
    SanErique,
    SanCarlos,
    Sagay,
    DSB,
    Pulupandan,
    Pontevedra,
    Murcia,
    MoisisPaddilla,
    bacolodCity,
    citymunicipal,
    HimamaylanBrgy,
    BagoCity,
    Binalbagan,
    Calatrava,
    CadizCity,
    Candoni,
    Cauayan,
    Escalante,
    Hinigaran,
    Hinobaan,
    Ilog,
    Isabela,
    KabankalanCIty,
    LaCarlota,
    LaCastellana,
    Manapla,
} from "./city.js";

var province = ["Negros Occidental"];
var provoption = '';
for (var i = 0; i < province.length; i++) {
    // console.log(province[i]);
    provoption +=
        '<option value="' + province[i] + '">' + province[i] + "</option>";
}
document.getElementById("province").innerHTML = provoption;

var citymunOption = "";
for (i = 0; i < citymunicipal.length; i++) {
    // console.log(citymunicipal[i]);
    citymunOption +=
        '<option value="' +
        citymunicipal[i] +
        '">' +
        citymunicipal[i] +
        "</option>";
}
document.getElementById("city").innerHTML = citymunOption;
// Loop for dropdown
var Set = document.getElementById("city");
Set.addEventListener("change", function() {
    if (this.value == "Bacolod City") {
        // this code for Bacolod barangay
        var BacolodBrgy = "";
        for (i = 0; i < bacolodCity.length; i++) {
            // console.log(bacolodCity[i]);
            BacolodBrgy +=
                '<option value="' +
                bacolodCity[i] +
                '">' +
                bacolodCity[i] +
                "</option>";
        }
        document.getElementById("brgy").innerHTML = BacolodBrgy;

        // Zip code
        var zip = ["6100"];
        var baczip = "";
        for (i = 0; i < zip.length; i++) {
            baczip += '<option value="' + zip[i] + '">' + zip[i] + "</option>";
        }
        document.getElementById("zipcode").innerHTML = baczip;
    } else if (this.value == "Himamaylan City") {
        // this code is for Himamaylan City
        var HimOption = "";
        for (i = 0; i < HimamaylanBrgy.length; i++) {
            HimOption +=
                '<option value="' +
                HimamaylanBrgy[i] +
                '">' +
                HimamaylanBrgy[i] +
                "</option>";
        }
        document.getElementById("brgy").innerHTML = HimOption;

        // Zip code
        var zip = ["6108"];
        var baczip = "";
        for (i = 0; i < zip.length; i++) {
            baczip += '<option value="' + zip[i] + '">' + zip[i] + "</option>";
        }
        document.getElementById("zipcode").innerHTML = baczip;
    } else if (this.value == "Bago City") {
        var BagoOption = "";
        for (i = 0; i < BagoCity.length; i++) {
            BagoOption +=
                '<option value="' + BagoCity[i] + '">' + BagoCity[i] + "</option>";
        }
        document.getElementById("brgy").innerHTML = BagoOption;
        // Zip code
        var zip = ["6101"];
        var baczip = "";
        for (i = 0; i < zip.length; i++) {
            baczip += '<option value="' + zip[i] + '">' + zip[i] + "</option>";
        }
        document.getElementById("zipcode").innerHTML = baczip;
    } else if (this.value == "Binalbagan") {
        var binalaOption = "";
        for (i = 0; i < Binalbagan.length; i++) {
            binalaOption +=
                '<option value="' + Binalbagan[i] + '">' + Binalbagan[i] + "</option>";
        }
        document.getElementById("brgy").innerHTML = binalaOption;
        // Zip code
        var zip = ["6107"];
        var baczip = "";
        for (i = 0; i < zip.length; i++) {
            baczip += '<option value="' + zip[i] + '">' + zip[i] + "</option>";
        }
        document.getElementById("zipcode").innerHTML = baczip;
    } else if (this.value == "Calatrava") {
        var CalatravaOption = "";
        for (i = 0; i < Calatrava.length; i++) {
            CalatravaOption +=
                '<option value="' + Calatrava[i] + '">' + Calatrava[i] + "</option>";
        }
        document.getElementById("brgy").innerHTML = CalatravaOption;
        // Zip code
        var zip = ["6126"];
        var baczip = "";
        for (i = 0; i < zip.length; i++) {
            baczip += '<option value="' + zip[i] + '">' + zip[i] + "</option>";
        }
        document.getElementById("zipcode").innerHTML = baczip;
    } else if (this.value == "Cadiz City") {
        var CadizOption = "";
        for (i = 0; i < CadizCity.length; i++) {
            CadizOption +=
                '<option value="' + CadizCity[i] + '">' + CadizCity[i] + "</option>";
        }
        document.getElementById("brgy").innerHTML = CadizOption;
        // Zip code
        var zip = ["6121"];
        var baczip = "";
        for (i = 0; i < zip.length; i++) {
            baczip += '<option value="' + zip[i] + '">' + zip[i] + "</option>";
        }
        document.getElementById("zipcode").innerHTML = baczip;
    } else if (this.value == "Candoni") {
        var CandoniOption = "";
        for (i = 0; i < Candoni.length; i++) {
            CandoniOption +=
                '<option value="' + Candoni[i] + '">' + Candoni[i] + "</option>";
        }
        document.getElementById("brgy").innerHTML = CandoniOption;
        // Zip code
        var zip = ["6110"];
        var baczip = "";
        for (i = 0; i < zip.length; i++) {
            baczip += '<option value="' + zip[i] + '">' + zip[i] + "</option>";
        }
        document.getElementById("zipcode").innerHTML = baczip;
    } else if (this.value == "Cauayan") {
        var CauayanOption = "";
        for (i = 0; i < Cauayan.length; i++) {
            CauayanOption +=
                '<option value="' + Cauayan[i] + '">' + Cauayan[i] + "</option>";
        }
        document.getElementById("brgy").innerHTML = CauayanOption;
        // Zip code
        var zip = ["6112"];
        var baczip = "";
        for (i = 0; i < zip.length; i++) {
            baczip += '<option value="' + zip[i] + '">' + zip[i] + "</option>";
        }
        document.getElementById("zipcode").innerHTML = baczip;
    } else if (this.value == "EB Magalona") {
        var EBMagaOption = "";
        for (i = 0; i < EBMagalona.length; i++) {
            EBMagaOption +=
                '<option value="' + EBMagalona[i] + '">' + EBMagalona[i] + "</option>";
        }
        document.getElementById("brgy").innerHTML = EBMagaOption;
        // Zip code
        var zip = ["6118"];
        var baczip = "";
        for (i = 0; i < zip.length; i++) {
            baczip += '<option value="' + zip[i] + '">' + zip[i] + "</option>";
        }
        document.getElementById("zipcode").innerHTML = baczip;
    } else if (this.value == "Escalante City") {
        var EscalanteOption = "";
        for (i = 0; i < Escalante.length; i++) {
            EscalanteOption +=
                '<option value="' + Escalante[i] + '">' + Escalante[i] + "</option>";
        }
        document.getElementById("brgy").innerHTML = EscalanteOption;
        // Zip code
        var zip = ["6124"];
        var baczip = "";
        for (i = 0; i < zip.length; i++) {
            baczip += '<option value="' + zip[i] + '">' + zip[i] + "</option>";
        }
        document.getElementById("zipcode").innerHTML = baczip;
    } else if (this.value == "Hinigaran") {
        var HinigaranOption = "";
        for (i = 0; i < Hinigaran.length; i++) {
            HinigaranOption +=
                '<option value="' + Hinigaran[i] + '">' + Hinigaran[i] + "</option>";
        }
        document.getElementById("brgy").innerHTML = HinigaranOption;
        // Zip code
        var zip = ["6106"];
        var baczip = "";
        for (i = 0; i < zip.length; i++) {
            baczip += '<option value="' + zip[i] + '">' + zip[i] + "</option>";
        }
        document.getElementById("zipcode").innerHTML = baczip;
    } else if (this.value == "Hinoba-an") {
        var HinobaanOption = "";
        for (i = 0; i < Hinobaan.length; i++) {
            HinobaanOption +=
                '<option value="' + Hinobaan[i] + '">' + Hinobaan[i] + "</option>";
        }
        document.getElementById("brgy").innerHTML = HinobaanOption;
        // Zip code
        var zip = ["6114"];
        var baczip = "";
        for (i = 0; i < zip.length; i++) {
            baczip += '<option value="' + zip[i] + '">' + zip[i] + "</option>";
        }
        document.getElementById("zipcode").innerHTML = baczip;
    } else if (this.value == "Ilog") {
        var IlogOption = "";
        for (i = 0; i < Ilog.length; i++) {
            IlogOption += '<option value="' + Ilog[i] + '">' + Ilog[i] + "</option>";
        }
        document.getElementById("brgy").innerHTML = IlogOption;
        // Zip code
        var zip = ["6109"];
        var baczip = "";
        for (i = 0; i < zip.length; i++) {
            baczip += '<option value="' + zip[i] + '">' + zip[i] + "</option>";
        }
        document.getElementById("zipcode").innerHTML = baczip;
    } else if (this.value == "Isabela") {
        var IsabelaOption = "";
        for (i = 0; i < Isabela.length; i++) {
            IsabelaOption +=
                '<option value="' + Isabela[i] + '">' + Isabela[i] + "</option>";
        }
        document.getElementById("brgy").innerHTML = IsabelaOption;
        // Zip code
        var zip = ["6128"];
        var baczip = "";
        for (i = 0; i < zip.length; i++) {
            baczip += '<option value="' + zip[i] + '">' + zip[i] + "</option>";
        }
        document.getElementById("zipcode").innerHTML = baczip;
    } else if (this.value == "Kabankalan City") {
        var KabankalanOption = "";
        for (i = 0; i < KabankalanCIty.length; i++) {
            KabankalanOption +=
                '<option value="' +
                KabankalanCIty[i] +
                '">' +
                KabankalanCIty[i] +
                "</option>";
        }
        document.getElementById("brgy").innerHTML = KabankalanOption;
        // Zip code
        var zip = ["6100"];
        var baczip = "";
        for (i = 0; i < zip.length; i++) {
            baczip += '<option value="' + zip[i] + '">' + zip[i] + "</option>";
        }
        document.getElementById("zipcode").innerHTML = baczip;
    } else if (this.value == "La Castellana") {
        var LaCastellanaOption = "";
        for (i = 0; i < LaCastellana.length; i++) {
            LaCastellanaOption +=
                '<option value="' +
                LaCastellana[i] +
                '">' +
                LaCastellana[i] +
                "</option>";
        }
        document.getElementById("brgy").innerHTML = LaCastellanaOption;
        // Zip code
        var zip = ["6131"];
        var baczip = "";
        for (i = 0; i < zip.length; i++) {
            baczip += '<option value="' + zip[i] + '">' + zip[i] + "</option>";
        }
        document.getElementById("zipcode").innerHTML = baczip;
    } else if (this.value == "La Carlota City") {
        var LaCarlotaOption = "";
        for (i = 0; i < LaCarlota.length; i++) {
            LaCarlotaOption +=
                '<option value="' + LaCarlota[i] + '">' + LaCarlota[i] + "</option>";
        }
        document.getElementById("brgy").innerHTML = LaCarlotaOption;
        // Zip code
        var zip = ["6130"];
        var baczip = "";
        for (i = 0; i < zip.length; i++) {
            baczip += '<option value="' + zip[i] + '">' + zip[i] + "</option>";
        }
        document.getElementById("zipcode").innerHTML = baczip;
    } else if (this.value == "Manapla") {
        var ManaplaOption = "";
        for (i = 0; i < Manapla.length; i++) {
            ManaplaOption +=
                '<option value="' + Manapla[i] + '">' + Manapla[i] + "</option>";
        }
        document.getElementById("brgy").innerHTML = ManaplaOption;
    } else if (this.value == "Moises Padilla") {
        var MoisisPaddillaOption = "";
        for (i = 0; i < MoisisPaddilla.length; i++) {
            MoisisPaddillaOption +=
                '<option value="' +
                MoisisPaddilla[i] +
                '">' +
                MoisisPaddilla[i] +
                "</option>";
        }
        document.getElementById("brgy").innerHTML = MoisisPaddillaOption;
        // Zip code
        var zip = ["6132"];
        var baczip = "";
        for (i = 0; i < zip.length; i++) {
            baczip += '<option value="' + zip[i] + '">' + zip[i] + "</option>";
        }
        document.getElementById("zipcode").innerHTML = baczip;
    } else if (this.value == "Murcia") {
        var MurciaOption = "";
        for (i = 0; i < Murcia.length; i++) {
            MurciaOption +=
                '<option value="' + Murcia[i] + '">' + Murcia[i] + "</option>";
        }
        document.getElementById("brgy").innerHTML = MurciaOption;
        // Zip code
        var zip = ["6129"];
        var baczip = "";
        for (i = 0; i < zip.length; i++) {
            baczip += '<option value="' + zip[i] + '">' + zip[i] + "</option>";
        }
        document.getElementById("zipcode").innerHTML = baczip;
    } else if (this.value == "Pontevedra") {
        var PontevedraOption = "";
        for (i = 0; i < Pontevedra.length; i++) {
            PontevedraOption +=
                '<option value="' + Pontevedra[i] + '">' + Pontevedra[i] + "</option>";
        }
        document.getElementById("brgy").innerHTML = PontevedraOption;
        // Zip code
        var zip = ["6105"];
        var baczip = "";
        for (i = 0; i < zip.length; i++) {
            baczip += '<option value="' + zip[i] + '">' + zip[i] + "</option>";
        }
        document.getElementById("zipcode").innerHTML = baczip;
    } else if (this.value == "Pulupandan") {
        var PulupandanOption = "";
        for (i = 0; i < Pulupandan.length; i++) {
            PulupandanOption +=
                '<option value="' + Pulupandan[i] + '">' + Pulupandan[i] + "</option>";
        }
        document.getElementById("brgy").innerHTML = PulupandanOption;
        // Zip code
        var zip = ["6102"];
        var baczip = "";
        for (i = 0; i < zip.length; i++) {
            baczip += '<option value="' + zip[i] + '">' + zip[i] + "</option>";
        }
        document.getElementById("zipcode").innerHTML = baczip;
    } else if (this.value == "Salvador Benedicto") {
        var DSBOption = "";
        for (i = 0; i < DSB.length; i++) {
            DSBOption += '<option value="' + DSB[i] + '">' + DSB[i] + "</option>";
        }
        document.getElementById("brgy").innerHTML = DSBOption;
        // Zip code
        var zip = ["6133"];
        var baczip = "";
        for (i = 0; i < zip.length; i++) {
            baczip += '<option value="' + zip[i] + '">' + zip[i] + "</option>";
        }
        document.getElementById("zipcode").innerHTML = baczip;
    } else if (this.value == "Sagay City") {
        var SagayOption = "";
        for (i = 0; i < Sagay.length; i++) {
            SagayOption +=
                '<option value="' + Sagay[i] + '">' + Sagay[i] + "</option>";
        }
        document.getElementById("brgy").innerHTML = SagayOption;
        // Zip code
        var zip = ["6122"];
        var baczip = "";
        for (i = 0; i < zip.length; i++) {
            baczip += '<option value="' + zip[i] + '">' + zip[i] + "</option>";
        }
        document.getElementById("zipcode").innerHTML = baczip;
    } else if (this.value == "San Carlos City") {
        var SanCarlosOption = "";
        for (i = 0; i < SanCarlos.length; i++) {
            SanCarlosOption +=
                '<option value="' + SanCarlos[i] + '">' + SanCarlos[i] + "</option>";
        }
        document.getElementById("brgy").innerHTML = SanCarlosOption;
        // Zip code
        var zip = ["6127"];
        var baczip = "";
        for (i = 0; i < zip.length; i++) {
            baczip += '<option value="' + zip[i] + '">' + zip[i] + "</option>";
        }
        document.getElementById("zipcode").innerHTML = baczip;
    } else if (this.value == "San Enrique") {
        var SanEriqueOption = "";
        for (i = 0; i < SanErique.length; i++) {
            SanEriqueOption +=
                '<option value="' + SanErique[i] + '">' + SanErique[i] + "</option>";
        }
        document.getElementById("brgy").innerHTML = SanEriqueOption;
        // Zip code
        var zip = ["6104"];
        var baczip = "";
        for (i = 0; i < zip.length; i++) {
            baczip += '<option value="' + zip[i] + '">' + zip[i] + "</option>";
        }
        document.getElementById("zipcode").innerHTML = baczip;
    } else if (this.value == "Sipalay City") {
        var SipalayOption = "";
        for (i = 0; i < Sipalay.length; i++) {
            SipalayOption +=
                '<option value="' + Sipalay[i] + '">' + Sipalay[i] + "</option>";
        }
        document.getElementById("brgy").innerHTML = SipalayOption;
        // Zip code
        var zip = ["6113"];
        var baczip = "";
        for (i = 0; i < zip.length; i++) {
            baczip += '<option value="' + zip[i] + '">' + zip[i] + "</option>";
        }
        document.getElementById("zipcode").innerHTML = baczip;
    } else if (this.value == "Silay City") {
        var SilayOption = "";
        for (i = 0; i < Silay.length; i++) {
            SilayOption +=
                '<option value="' + Silay[i] + '">' + Silay[i] + "</option>";
        }
        document.getElementById("brgy").innerHTML = SilayOption;
        // Zip code
        var zip = ["6116"];
        var baczip = "";
        for (i = 0; i < zip.length; i++) {
            baczip += '<option value="' + zip[i] + '">' + zip[i] + "</option>";
        }
        document.getElementById("zipcode").innerHTML = baczip;
    } else if (this.value == "Talisay City") {
        var TalisayOption = "";
        for (i = 0; i < Talisay.length; i++) {
            TalisayOption +=
                '<option value="' + Talisay[i] + '">' + Talisay[i] + "</option>";
        }
        document.getElementById("brgy").innerHTML = TalisayOption;
        // Zip code
        var zip = ["6115"];
        var baczip = "";
        for (i = 0; i < zip.length; i++) {
            baczip += '<option value="' + zip[i] + '">' + zip[i] + "</option>";
        }
        document.getElementById("zipcode").innerHTML = baczip;
    } else if (this.value == "Toboso") {
        var TobosoOption = "";
        for (i = 0; i < Toboso.length; i++) {
            TobosoOption +=
                '<option value="' + Toboso[i] + '">' + Toboso[i] + "</option>";
        }
        document.getElementById("brgy").innerHTML = TobosoOption;
        // Zip code
        var zip = ["6125"];
        var baczip = "";
        for (i = 0; i < zip.length; i++) {
            baczip += '<option value="' + zip[i] + '">' + zip[i] + "</option>";
        }
        document.getElementById("zipcode").innerHTML = baczip;
    } else if (this.value == "Valladolid") {
        var ValladolidOption = "";
        for (i = 0; i < Valladolid.length; i++) {
            ValladolidOption +=
                '<option value="' + Valladolid[i] + '">' + Valladolid[i] + "</option>";
        }
        document.getElementById("brgy").innerHTML = ValladolidOption;
        // Zip code
        var zip = ["6103"];
        var baczip = "";
        for (i = 0; i < zip.length; i++) {
            baczip += '<option value="' + zip[i] + '">' + zip[i] + "</option>";
        }
        document.getElementById("zipcode").innerHTML = baczip;
    } else if (this.value == "Victorias City") {
        var VictoriasOption = "";
        for (i = 0; i < Victorias.length; i++) {
            VictoriasOption +=
                '<option value="' + Victorias[i] + '">' + Victorias[i] + "</option>";
        }
        document.getElementById("brgy").innerHTML = VictoriasOption;
        // Zip code
        var zip = ["6119"];
        var baczip = "";
        for (i = 0; i < zip.length; i++) {
            baczip += '<option value="' + zip[i] + '">' + zip[i] + "</option>";
        }
        document.getElementById("zipcode").innerHTML = baczip;
    }
});