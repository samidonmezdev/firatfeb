<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('form2/styles.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> <script src="js.js"></script>

    <!-- Sekmeli menü -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".tab-menu a").click(function(event) {
                event.preventDefault();
                $(this).parent().addClass("current");
                $(this).parent().siblings().removeClass("current");
                var tab = $(this).attr("href");
                $(".tab-content").not(tab).css("display", "none");
                $(tab).fadeIn();
            });
        });

        $(document).ready(function(){
            $(function(){
                $(".ilk-e").click(function(event){
                    $(".ilktezUyari").hide();
                });
                $(".ilk-h").click(function(event){
                    $(".ilktezUyari").hide();
                });
            });

            $(function(){
                $(".ek-e").click(function(event){
                    $('.EkbelgeUyari').hide();
                });
                $(".ek-h").click(function(event){
                    $('.EkbelgeUyari').hide();
                });
            });
            $(".devam1").click(function(){
                var teklif= $("input[name='ilk-teklif']:checked").val();
                if (teklif == "evet")
                {
                    $("#tab2").toggle();
                    $("#tab1").css("display", "none");
                }
                else if (teklif == "hayır")
                {
                    $("#tab6").toggle();
                    $("#tab1").css("display", "none");
                }
                else {
                    $('.ilktezUyari').html("Lütfen Seçim Yapın!!!").css({"color":"red"});
                }
            });

            $(".devam2").click(function(){
                $("#tab3").toggle();
                $("#tab2").css("display", "none");
            });

            $(".devam3").click(function(){
                $("#tab4").toggle();
                $("#tab3").css("display", "none");
            });

            $(".devam4").click(function(){
                $("#tab19").toggle();
                $("#tab4").css("display", "none");
            });
            $(".devam19").click(function(){
                $("#tab5").toggle();
                $("#tab19").css("display", "none");
            });

            $(".devam5").click(function(){
                $("#tab7").toggle();
                $("#tab5").css("display", "none");
            });

            $(".devam6").click(function(){
                $("#tab7").toggle();
                $("#tab6").css("display", "none");
            });

            $(".devam7").click(function(){
                var teklif= $("input[name='ek']:checked").val();
                if (teklif == "evet")
                {
                    $("#tab8").toggle();
                    $("#tab7").css("display", "none");
                }
                else if (teklif == "hayır")
                {
                    $("#tab9").toggle();
                    $("#tab7").css("display", "none");
                }
                else {
                    $('.EkbelgeUyari').html("Lütfen Seçim Yapın!!!").css({"color":"red"});
                    setTimeout(function() {
                        $('.EkbelgeUyari').hide(); }, 3000); /*1000 milisaniye = 1 saniye*/
                }
            });

            $(".devam8").click(function(){
                $("#tab9").toggle();
                $("#tab8").css("display", "none");
            });

            $(".devam9").click(function(){
                $("#tab10").toggle();
                $("#tab9").css("display", "none");
            });

            $(".devam10").click(function(){
                $("#tab11").toggle();
                $("#tab10").css("display", "none");
            });

            $(".devam11").click(function(){
                $("#tab12").toggle();
                $("#tab11").css("display", "none");
            });

            $(".devam12").click(function(){
                $("#tab13").toggle();
                $("#tab12").css("display", "none");
            });

            $(".devam13").click(function(){
                $("#tab14").toggle();
                $("#tab13").css("display", "none");
            });

            $(".devam14").click(function(){
                $("#tab15").toggle();
                $("#tab14").css("display", "none");
            });

            $(".devam15").click(function(){
                $("#tab16").toggle();
                $("#tab15").css("display", "none");
            });

            $(".devam16").click(function(){
                $("#tab17").toggle();
                $("#tab16").css("display", "none");
            });

            $(".devam17").click(function(){
                $("#tab18").toggle();
                $("#tab17").css("display", "none");
            });
        });

    </script>

    <title>Hello Student</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

<div class="modal-body row">
    <div class="col-md-1"></div>
    <div class="col-md-2"></div>

    <div class="col-md-6 orta">
        <a href="index.html"><img src="img/logo.png" id="logo"></a>
        <h3 class="">FEN BİLİMLERİ ENSTİTÜSÜ</h3>
        <h2 class="">TEZ KONUSU ÖNERİ FORMU</h2>
    </div>

    <div class="col-md-1"></div>
    <div class="col-md-2"></div>
</div>

<div class="modal-body row">
    <div class="col-md-3"></div>

    <div class="col-md-6">

        <!-- Your first column here -->
        <form id="form-signin" class="form-signin form doktora" action="{{route('form2.post')}}" method="post">

            <div class="uyari"></div>

            <div class="container">
                <div class="tab-container">
                    <div id="tab1" class="tab-content">

                        <h3 style="color: #333"><b>İlk Tez Öneriniz mi?</b></h3>

                        <br>

                        <div style=" width: 100px; margin: 0 auto; text-align: left;">
                            <input type="radio" value="evet" name="ilk-teklif" id="ilk-e" class="ilk-e"> <label for="ilk-e">Evet</label>

                            <br>

                            <input type="radio" value="hayır" name="ilk-teklif" id="ilk-h" class="ilk-h"> <label for="ilk-h">Hayır</label>
                        </div>
                        <label class="ilktezUyari"></label>

                        <br>

                        <div class="submit">
                            <input type="button" value="Devam" id="button-blue" onclick="" class="form-control shadow-none devam1" />
                            <div class="ease"></div>
                        </div>

                    </div>

                    <div id="tab2" class="tab-content">

                        <h3 style="color: #333"><b>Öğrenci Bilgileri</b></h3>

                        <br>

                        <h5>Öğrenci No:</h5>
                        <input type="text" name="ogr-no" id="ogr-no" class="form-doktora" placeholder="Öğrenci No">
                        <label class="ogrnu"></label>
                        <br>
                        <br>

                        <h5>Adı ve Soyadı:</h5>
                        <input type="text" name="ogr-ad" id="ogr-ad" class="form-doktora" placeholder="Ad ve Soyad">
                        <label class="ograd"></label>
                        <br>
                        <br>
                        <br>
                        <h5>Egitim Tipi</h5>
                        <input type="radio" name="egitim" class="" id="" value="doktora"> Doktora



                        <input type="radio" name="egitim" class="" id="" value="yuksek"> Yüksek Lisans


                        <input type="radio" name="egitim" value="butunlesik"> Butunlesik Doktora
                        <br>
                        <br>
                        <br>
                        <div class="submit">
                            <input type="button" value="Devam" id="button-blue" onclick="" class="form-control shadow-none devam2" />
                            <div class="ease"></div>
                        </div>

                    </div>

                    <div id="tab3" class="tab-content">

                        <h3 style="color: #333"><b>Danışman Bilgileri</b></h3>
                        <br>
                        <h5>Danışman Unvan:</h5>
                        <input type="text" name="unvan" id="danisman" class="form-doktora" >
                        <label class="danısmanB"></label>
                        <br>

                        <h5>Danışmanı Ad Soyad:</h5>
                        <input type="text" name="danisman" id="danisman" class="form-doktora" >
                        <label class="danısmanB"></label>
                        <br>
                        <br>
                        <br>

                        <div class="submit">
                            <input type="button" value="Devam" id="button-blue" onclick="" class="form-control shadow-none devam3" />
                            <div class="ease"></div>
                        </div>

                    </div>

                    <div id="tab4" class="tab-content">

                        <h3 style="color: #333"><b>Anabilim Dalı ve Bilim Dalı</b></h3>

                        <br>

                        <h5>Anabilim Dalı:</h5>
                        <select class="shadow-none form-doktora" name="anabilim-dali" id="anabilim-dali">
                            <option value="" selected>Anabilim Dalı Seçin...</option>
                            <option value="Bilgisayar Mühendisliği">Bilgisayar Mühendisliği</option>
                            <option value="Biyomühendislik">Biyomühendislik</option>
                            <option value="Çevre Mühendisliği">Çevre Mühendisliği</option>
                            <option value="Elektrik-Elektronik Mühendisliği">Elektrik-Elektronik Mühendisliği</option>
                            <option value="Elektrik-Elektronik Mühendisliği Teknolojileri">Elektrik-Elektronik Mühendisliği Teknolojileri</option>
                            <option value="Enerji Sistemleri Mühendisliği">Enerji Sistemleri Mühendisliği</option>
                            <option value="Fizik">Fizik</option>
                            <option value="İnşaat Mühendisliği">İnşaat Mühendisliği</option>
                            <option value="İstatistik">İstatistik</option>
                            <option value="Jeoloji Mühendisliği">Jeoloji Mühendisliği</option>
                            <option value="Kimya">Kimya</option>
                            <option value="Kimya Mühendisliği">Kimya Mühendisliği</option>
                            <option value="Makine Mühendisliği">Makine Mühendisliği</option>
                            <option value="Matematik">Matematik</option>
                            <option value="Mekatronik Mühendisliği">Mekatronik Mühendisliği</option>
                            <option value="Metalurji ve Malzeme Mühendisliği">Metalurji ve Malzeme Mühendisliği</option>
                            <option value="Metalurji ve Malzeme Mühendisliği Teknolojileri">Metalurji ve Malzeme Mühendisliği Teknolojileri</option>
                            <option value="Su Ürünleri Yetiştiriciliği">Su Ürünleri Yetiştiriciliği</option>
                            <option value="Yazılım Mühendisliği">Yazılım Mühendisliği</option>
                        </select>
                        <label class="anabilimUyarı"></label>

                        <br>
                        <br>

                        <h5>Bilim Dalı:</h5>
                        <input type="text" name="bilim-dali" id="bilim-dali" class="form-doktora" placeholder="Bilim Dalı">
                        <label class="bilimdalıUyari"></label>
                        <br>

                        <br>
                        <br>

                        <div class="submit">
                            <input type="button" value="Devam" id="button-blue" onclick="" class="form-control shadow-none devam4" />
                            <div class="ease"></div>
                        </div>

                    </div>
                    <!--Tez yazım dili ---------------------------------------------------->
                    <div id="tab19" class="tab-content">

                        <h3 style="color: #333"><b>Tez Bilgileri</b></h3>

                        <br>

                        <h5>Türkçe Tez Başlığı</h5>
                        <input type="text" name="turkceBaslik" id="turkceBaslik" class="form-doktora" placeholder="Türkce Tez Baslığı">
                        <label class="tezturkceUyari"></label>
                        <br>
                        <h5>İngilizce Tez Başlığı</h5>
                        <input type="text" name="ingBaslik" id="ingBaslik" class="form-doktora" placeholder="İngilizce Tez Baslığı">
                        <label class="tezingUyari"></label>
                        <br>
                        <h5>Anahtar Kelimeler</h5>
                        <input type="text" name="anahtarKelime" id="anahtarKelime" class="form-doktora" placeholder="max 5 kelime (kelimeleri virgülle ayırınız.)">
                        <label class="kalanson"></label>
                        <label class="anahtarkelimeUyari"></label>
                        <br>
                        <br>

                        <div class="submit">
                            <input type="button" value="Devam" id="button-blue" onclick="" class="form-control shadow-none devam19" />
                            <div class="ease"></div>
                        </div>

                    </div>


                    <div id="tab5" class="tab-content">

                        <h3 style="color: #333"><b>Tez Bilgileri</b></h3>

                        <br>

                        <h5>Tez Yazım Dili:</h5>
                        <br>

                        <div class="sol">
                            <input type="radio" value="1" name="tez-Yazım-Dili" id="turkce"> <label for="turkce">Türkçe</label>

                            <br>

                            <input type="radio" value="2" name="tez-Yazım-Dili" id="ingilizce"> <label for="ingilizce">İngilizce</label>
                            <br>
                            <label class="tezdiliUyari"></label>
                        </div>

                        <br>

                        <h5>Çalışma Tarzı:</h5>
                        <br>
                        <div class="sol">

                            <input type="checkbox" value="1" name="calisma-tarzi" id="deneysel"> <label for="deneysel">Deneysel</label>

                            <br>

                            <input type="checkbox" value="2" name="calisma-tarzi" id="teorik"> <label for="teorik">Teorik</label>

                            <br>

                            <input type="checkbox" value="3" name="calisma-tarzi" id="simulasyon"> <label for="simulasyon">Simülasyon</label>

                            <br>

                            <input type="checkbox" value="4" name="calisma-tarzi" id="gelistirme"> <label for="gelistirme">Sistem/Araç/Yazlılm Geliştirme</label>

                            <br>

                            <input type="checkbox" value="5" name="calisma-tarzi" id="analiz"> <label for="analiz">Saha Analizi</label>
                            <br>
                            <label class="çalışmaAlanıUyari"></label>
                        </div>

                        <br>
                        <br>

                        <div class="submit">
                            <input type="button" value="Devam" id="button-blue" onclick="" class="form-control shadow-none devam5" />
                            <div class="ease"></div>
                        </div>

                    </div>

                    <div id="tab6" class="tab-content">

                        <h3 style="color: #333"><b>Değişiklik Formu</b></h3>

                        <br>
                        <br>

                        <div class="submit">
                            <input type="button" value="Devam" id="button-blue" onclick="" class="form-control shadow-none devam6" />
                            <div class="ease"></div>
                        </div>

                    </div>

                    <div id="tab7" class="tab-content">

                        <h3 style="color: #333"><b>Ek Belgeler Varmı?</b></h3>

                        <br>

                        <div style=" width: 100px; margin: 0 auto; text-align: left;">
                            <input type="radio" value="evet" name="ek" id="ek-e" class="ek-e"> <label for="ek-e">Evet</label>

                            <br>

                            <input type="radio" value="hayır" name="ek" id="ek-h" class="ek-h"> <label for="ek-h">Hayır</label>
                            <br>
                            <label class="EkbelgeUyari"></label>
                        </div>
                        <br>
                        <br>

                        <div class="submit">
                            <input type="button" value="Devam" id="button-blue" onclick="" class="form-control shadow-none devam7" />
                            <div class="ease"></div>
                        </div>

                    </div>

                    <div id="tab8" class="tab-content">

                        <h3 style="color: #333"><b>Ekler</b></h3>

                        <br>

                        <h5>1. Etik Kurul İzni</h5>
                        <div class="sol">
                            <input type="radio" name="etik-izin" id="gerekmiyor" value="1"> <label>Gerekmiyor </label>

                            <input type="radio" name="etik-izin" id="belgevar" value="2"> <label>Belge Var </label>
                            <label class="ek1Uyari"></label>
                        </div>

                        <br>

                        <h5>2. Veri Kullanımı İzni</h5>
                        <div class="sol">
                            <input type="radio" name="veri-izin" id="gerekmiyor2" value="1"> <label>Gerekmiyor </label>

                            <input type="radio" name="veri-izin" id="belgevar2" value="2"> <label>Belge Var </label>
                            <label class="ek2Uyari"></label>
                        </div>

                        <br>

                        <h5>3. Kurum/Kuruluş İzni</h5>
                        <div class="sol">
                            <input type="radio" name="kurum-izin" id="gerekmiyor3" value="1"> <label>Gerekmiyor </label>

                            <input type="radio" name="kurum-izin" id="belgevar3" value="2"> <label>Belge Var </label>
                            <label class="ek3Uyari"></label>
                        </div>

                        <br>

                        <h5>4. Fikir Hak Sahipliği</h5>
                        <div class="sol">
                            <input type="radio" name="fikir-izin" id="gerekmiyor4" value="1"> <label>Gerekmiyor </label>

                            <input type="radio" name="fikir-izin" id="belgevar4" value="2"> <label>Belge Var </label>
                            <label class="ek4Uyari"></label>
                        </div>

                        <br>
                        <br>

                        <div class="submit">
                            <input type="button" value="Devam" id="button-blue" onclick="" class="form-control shadow-none devam8" />
                            <div class="ease"></div>
                        </div>

                    </div>

                    <div id="tab9" class="tab-content">

                        <h3 style="color: #333"><b>Ayrıntılar</b></h3>

                        <br>

                        <h5>1. Tezin Amacı</h5>
                        <div style="text-align: left;">
                            Çalışmanın amacı en fazla 3-5 cümle ile ifade edilmeli, tanımlama bilgilerinden kaçınılmalıdır. Birden fazla amaç varsa maddeler halinde verilmelidir.

                            <br>
                            <br>

                            <b>Lütfen bu sayfadaki alanları genişletmeyiniz ve sayfa sonundaki açıklamayı okuyunuz!</b>

                            <br>
                            <br>

                            <textarea placeholder="Metin Girmek İçin Buraya Tıklayın veya Dokunun" rows="5" class="form-doktora form-textarea" name="tez-amac" id="tez-amac"></textarea>
                            <label class="kalan2"></label>
                            <label class="tezamacıUyari"></label>
                        </div>


                        <br>
                        <br>

                        <div class="submit">
                            <input type="button" value="Devam" id="button-blue" onclick="" class="form-control shadow-none devam9" />
                            <div class="ease"></div>
                        </div>

                    </div>

                    <div id="tab10" class="tab-content">

                        <h3 style="color: #333"><b>Ayrıntılar</b></h3>

                        <br>

                        <h5>2. Çalışma Gerekçesi</h5>
                        <div style="text-align: left;"><b>
                                <u>Problem Tanımı:</u></b>     Bilimsel/teknolojik problem 3-5 cümle ile ifade edilmelidir. Birden fazla problem var ise maddeler    halinde verilmelidir.

                            <br>
                            <br>

                            <b><u>Hipotezler:</u></b> Problem(ler) için çözümü öngören hipotezler (veya varsayımlar) maddeler halinde ifade edilmelidir.

                            <br>
                            <br>

                            <b><u>Yapılabilirlik:</u></b> Hangi hipotezlerin hangi imkanlarla nasıl test edilebileceğinin, çalışmanın yapılabilirliğini gösterecek ikna edici açıklamaların verilmesi beklenmektedir. Motivasyon artırıcı 1-2 literatürden de kısaca bahsedilebilir.

                            <br>
                            <hr>

                            <b><u>Problem Tanımı</u></b> (...elde etmek zordur/..maliyetlidir/..daha önce yapılmamıştır/..gözlenmemiştir/literatürde bulunmamaktadır/ gibi cümlelerle problem tanımı yapılmalıdır)

                            <br>
                            <br>

                            <textarea placeholder="Metin Girmek İçin Buraya Tıklayın veya Dokunun" rows="5" class="form-doktora form-textarea" name="tanım" id="tanım"></textarea>
                            <label class="kalan3" ></label>
                            <label class="ProblemTanımıUyari" ></label>
                            <hr>

                            <b><u>Hipotezler</u></b> (veya Varsayımlar)

                            <br>
                            <br>

                            <textarea placeholder="Metin Girmek İçin Buraya Tıklayın veya Dokunun" rows="5" class="form-doktora form-textarea" name="hipotez" id="hipotez"></textarea>
                            <label class="kalan4" ></label>
                            <label class="hipotezUyari" ></label>
                            <hr>

                            <b><u>Yapılabilirlik</u></b> (Motivasyon)

                            <br>
                            <br>

                            <textarea placeholder="Metin Girmek İçin Buraya Tıklayın veya Dokunun" rows="5" class="form-doktora form-textarea" name="yapilabilirlik" id="yapilabilirlik"></textarea>
                            <label class="kalan5" ></label>
                            <label class="yapılabilirlikUyari" ></label>
                            <br>
                        </div>


                        <br>
                        <br>

                        <div class="submit">
                            <input type="button" value="Devam" id="button-blue" onclick="" class="form-control shadow-none devam10" />
                            <div class="ease"></div>
                        </div>

                    </div>

                    <div id="tab11" class="tab-content">

                        <h3 style="color: #333"><b>Ayrıntılar</b></h3>

                        <br>

                        <h5>3. Konu ve Kapsam</h5>
                        <div style="text-align: left;">
                            <b><u>Konu Detayı:</u></b> Çalışılacak konu hakkında detaylı bilgi verilmelidir. Konunun önemi vurgulanmalı, günümüz ve gelecek açısından değerlendirilmeli, temel kavramlar, modeller, teoriler ifade edilmeli.

                            <br>
                            <br>

                            <b><u>Literatür Özeti:</u></b> Konu ile ilgili klasik ve güncel kaynaklardan nasıl yararlanıldığı belirtilmeli ve bunların kısa özetlerine yer verilmelidir. Özetler yapılırken ilgili kaynakta problemin nasıl ele alındığı, çözüm önerileri, yöntemi ve bulguları dikkate alınır.
                            Alanı gerektiği kadar genişletebilirsiniz.


                            <hr>

                            <b><u>Konu Detayı</u></b>

                            <br>
                            <br>

                            <textarea placeholder="Metin Girmek İçin Buraya Tıklayın veya Dokunun" rows="5" class="form-doktora form-textarea" name="detay" id="detay"></textarea>
                            <label class="kalan6" ></label>
                            <label class="konuDetayıUyari" ></label>
                            <hr>

                            <b><u>Literatür Özeti</u></b>

                            <br>
                            <br>

                            <textarea placeholder="Metin Girmek İçin Buraya Tıklayın veya Dokunun" rows="5" class="form-doktora form-textarea" name="literatur" id="literatur"></textarea>
                            <label class="kalan7" ></label>
                            <label class="literatürUyari" ></label>
                            <hr>

                            <b>Kaynaklar (En fazla 15 adet kaynak kullanılmalıdır.)</b>

                            <br>

                            (F. Ü. Fen Bilimleri Enstitüsü Tez Yazım Kılavuzuna uygun şekilde verilmelidir. Son 5 yıl içindeki literatür taranmış olmalıdır. Kaynaklara Konu Detayı ve Literatür Özeti bölümlerinde mutlaka atıfta bulunulmalıdır)

                            <br>
                            <div class="col-md-12">
                                <button class="form-control col-md-3 btn btn-success btn-sm yeni" type="button">Yeni ekle</button>
                                <button class="form-control  col-md-3 btn btn-danger btn-sm sil" type="button">Sil</button>

                            </div>

                            <br>
                            <div class="col-md-12 kaynakca">
                                <label for="" class="col-md-12">1)<input type="text" class="form-control doktora" id="kaynak-1" name="kaynakca[]">
                                </label>
                            </div>

                        </div>

                        <br>
                        <br>

                        <div class="submit">
                            <input type="button" value="Devam" id="button-blue" onclick="" class="form-control shadow-none devam11" />
                            <div class="ease"></div>
                        </div>

                    </div>

                    <div id="tab12" class="tab-content">

                        <h3 style="color: #333"><b>Ayrıntılar</b></h3>

                        <br>

                        <h5>4. Yöntem</h5>
                        <div style="text-align: left;">
                            Yukarıdaki Hipotezleri doğrulayabilecek nitelikte veriler/sonuçlar üretmeyi hedefleyen Deneysel/teorik/Simülasyon gibi, Tezin amaçlarına ulaşmayı sağlayacak yöntem(ler) verilmeli diğer yöntemlere yer verilmemelidir. Ölçülecek, hesaplanacak, belirlenecek niceliklerin veya yapılacakların kısa açıklaması beklenmektedir. Sonuçlara uygulanacak analiz teknikleri ve sonuçların Tezde nasıl sunulacağı bilgisine yer verilmelidir. Bilgiler olabildiğince İş Paketleri planına uygun olarak verilmelidir.

                            <br>

                            <b>Alanı gerektiği kadar genişletebilirsiniz.</b>

                            <hr>

                            <textarea placeholder="Metin Girmek İçin Buraya Tıklayın veya Dokunun" rows="5" class="form-doktora form-textarea" name="yontem" id="yontem"></textarea>
                            <label class="kalan8" ></label>
                            <label class="yöntemUyari" ></label>
                        </div>

                        <br>
                        <br>

                        <div class="submit">
                            <input type="button" value="Devam" id="button-blue" onclick="" class="form-control shadow-none devam12" />
                            <div class="ease"></div>
                        </div>

                    </div>

                    <div id="tab13" class="tab-content">

                        <h3 style="color: #333"><b>Ayrıntılar</b></h3>

                        <br>

                        <h5>5. Özgün Değer</h5>
                        <div style="text-align: left;">
                            Problemin daha önce diğer araştırmacılar tarafından ortaya konup konmadığı, hipotezlerin özgün olup olmadıkları, Tez çalışmasında kullanılacak yöntemin yeni olup olmadığı, elde edilecek sonuçların bilime/teknolojiye katkısının ne olacağı belirtilmelidir.

                            <hr>

                            <textarea placeholder="Metin Girmek İçin Buraya Tıklayın veya Dokunun" rows="5" class="form-doktora form-textarea" name="ozgun-deger" id="ozgun-deger"></textarea>
                            <label class="kalan9" ></label>
                            <label class="özgünDegerUyari" ></label>
                        </div>

                        <br>
                        <br>

                        <div class="submit">
                            <input type="button" value="Devam" id="button-blue" onclick="" class="form-control shadow-none devam13" />
                            <div class="ease"></div>
                        </div>

                    </div>

                    <div id="tab14" class="tab-content">

                        <h3 style="color: #333"><b>Ayrıntılar</b></h3>

                        <br>

                        <h5>6. Yaygın Etki</h5>
                        <div style="text-align: left;">
                            Tez çalışmasıyla elde edilecek sonuçlardan kimlerin nasıl faydalanabileceği ulusal veya uluslararası ekonomiye (patent, faydalı model, ürün), toplumsal refaha bilimsel değerlere ve birikime (yayın, proje, politika, yeni metot) nasıl bir katkı sağlayabileceği ile ilgili açıklama yapılması beklenmektedir.

                            <hr>

                            <textarea placeholder="Metin Girmek İçin Buraya Tıklayın veya Dokunun" rows="5" class="form-doktora form-textarea" name="yaygin-etki" id="yaygin-etki"></textarea>
                            <label class="kalan10"></label>
                            <label class="yaygınetkiUyari" ></label>

                        </div>

                        <br>
                        <br>

                        <div class="submit">
                            <input type="button" value="Devam" id="button-blue" onclick="" class="form-control shadow-none devam14" />
                            <div class="ease"></div>
                        </div>

                    </div>

                    <div id="tab15" class="tab-content">

                        <h3 style="color: #333"><b>Ayrıntılar</b></h3>

                        <br>

                        <h5>7. Kurum Dışına Bağımlılık</h5>
                        <div style="text-align: left;">
                            Kurum dışından ihtiyaç duyulacak araç, gereç, laboratuvar, bilirkişi ve veriler hakkında kısa bilgilerin verilmesi beklenmektedir.

                            <hr>

                            <textarea placeholder="Metin Girmek İçin Buraya Tıklayın veya Dokunun" rows="5" class="form-doktora form-textarea" name="bagimlilik" id="bagimlilik"></textarea>
                            <label class="kalan11"></label>
                            <label class="bağımlılıkUyari" ></label>

                        </div>

                        <br>
                        <br>

                        <div class="submit">
                            <input type="button" value="Devam" id="button-blue" onclick="" class="form-control shadow-none devam15" />
                            <div class="ease"></div>
                        </div>

                    </div>

                    <div id="tab16" class="tab-content">

                        <h3 style="color: #333"><b>Ayrıntılar</b></h3>

                        <br>

                        <h5>8. Çalışma Takvimi</h5>
                        <div style="text-align: left;">
                            Tez çalışmasının aşamaları iş paketleri halinde düzenlenip her iş parçasının tahminen kaçıncı aylarda tamamlanacağı tabloda belirtilmelidir. İş paketleri; kaynak araştırması, veri toplama, uygulama, değerlendirme ve Tez yazımı gibi organize edilebilir. Tablo satırları gerektiği kadar artırılabilir. Süreler üst üste örtüşebilir. Yüksek Lisans (12-16 Ay) ve Doktora (24 Ay) için gereği gibi zamanlama yapılması tavsiye edilir.

                            <hr>

                            <table class="table1" style="width:100%">
                                <tr>
                                    <th>NO</th>
                                    <th>İŞ PAKETLERİ</th>
                                    <th>ZAMANLAMA (Aylar)</th>
                                </tr>
                                <tr>
                                    <td class="td1">1</td>
                                    <td class="td2">
                                        <input type="text" name="is-paket1" id="is-paket1" class="form-doktora" placeholder="">
                                    </td>
                                    <td class="td3">
                                        <input type="text" name="is-zaman" id="is-zaman" class="form-doktora" placeholder="1-2" style="width: 100%; text-align: center;">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="td1">2</td>
                                    <td class="td2">
                                        <input type="text" name="is-paket2" id="is-paket2" class="form-doktora" placeholder="">
                                    </td>
                                    <td class="td3">
                                        <input type="text" name="is-zaman2" id="is-zaman2" class="form-doktora" placeholder="3-4" style="width: 100%; text-align: center;">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="td1">3</td>
                                    <td class="td2">
                                        <input type="text" name="is-paket3" id="is-paket3" class="form-doktora" placeholder="">
                                    </td>
                                    <td class="td3">
                                        <input type="text" name="is-zaman3" id="is-zaman3" class="form-doktora" placeholder="5-6" style="width: 100%; text-align: center;">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="td1">4</td>
                                    <td class="td2">
                                        <input type="text" name="is-paket4" id="is-paket4" class="form-doktora" placeholder="">
                                    </td>
                                    <td class="td3">
                                        <input type="text" name="is-zaman4" id="is-zaman4" class="form-doktora" placeholder="7-8" style="width: 100%; text-align: center;">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="td1">5</td>
                                    <td class="td2">
                                        <input type="text" name="is-paket5" id="is-paket5" class="form-doktora" placeholder="">
                                    </td>
                                    <td class="td3">
                                        <input type="text" name="is-zaman5" id="is-zaman5" class="form-doktora" placeholder="" style="width: 100%; text-align: center;">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="td1">6</td>
                                    <td class="td2">
                                        <input type="text" name="is-paket6" id="is-paket6" class="form-doktora" placeholder="">
                                    </td>
                                    <td class="td3">
                                        <input type="text" name="is-zaman6" id="is-zaman6" class="form-doktora" placeholder="" style="width: 100%; text-align: center;">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="td1">7</td>
                                    <td class="td2">
                                        <input type="text" name="is-paket7" id="is-paket7" class="form-doktora" placeholder="">
                                    </td>
                                    <td class="td3">
                                        <input type="text" name="is-zaman7" id="is-zaman7" class="form-doktora" placeholder="" style="width: 100%; text-align: center;">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="td1">8</td>
                                    <td class="td2">
                                        <input type="text" name="is-paket8" id="is-paket8" class="form-doktora" placeholder="">
                                    </td>
                                    <td class="td3">
                                        <input type="text" name="is-zaman8" id="is-zaman8" class="form-doktora" placeholder="" style="width: 100%; text-align: center;">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="td1">9</td>
                                    <td class="td2">
                                        <input type="text" name="is-paket9" id="is-paket9" class="form-doktora" placeholder="">
                                    </td>
                                    <td class="td3">
                                        <input type="text" name="is-zaman9" id="is-zaman9" class="form-doktora" placeholder="" style="width: 100%; text-align: center;">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="td1">10</td>
                                    <td class="td2">
                                        <input type="text" name="is-paket10" id="is-paket10" class="form-doktora" placeholder="">
                                    </td>
                                    <td class="td3">
                                        <input type="text" name="is-zaman10" id="is-zaman10" class="form-doktora" placeholder="" style="width: 100%; text-align: center;">
                                    </td>
                                </tr>

                            </table>
                            <label class="takvimUyari"></label>
                        </div>

                        <br>
                        <br>

                        <div class="submit">
                            <input type="button" value="Devam" id="button-blue" onclick="" class="form-control shadow-none devam16" />
                            <div class="ease"></div>
                        </div>

                    </div>

                    <div id="tab17" class="tab-content">

                        <h3 style="color: #333"><b>Ayrıntılar</b></h3>

                        <br>

                        <h5>9. Enstitü İstatistik Amaçlı Sorular</h5>
                        <div style="text-align: left;">
                            Danışman Tarafından Doldurulacaktır!

                            <hr>

                            <table style="text-align: left;">
                                <tr>
                                    <td style="width: 70%;">
                                        1.Öğrenci bir iş yerinde çalışıyor mu?
                                    </td>
                                    <td >
                                        <input type="radio" name="soru1" class="soru1-" id="soru1-1" value="1"> Evet

                                        <br>

                                        <input type="radio" name="soru1" class="soru1-" id="soru1-2" value="2"> Hayır
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        2.Öğrencinin Tez çalışması süresince muhtemel ikamet ili
                                    </td>
                                    <td class="">
                                        <input type="radio" name="soru2" class="soru2-" id="soru2-1" value="1"> Elazığ

                                        <br>

                                        <input type="radio" name="soru2" class="soru2-" id="soru2-2" value="2"> Elazığ Dışında
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        3.Çalışmalar için Laboratuvar imkanı yeterli mi?
                                    </td>
                                    <td class="">
                                        <input type="radio" name="soru3" class="soru3-" id="soru3-1" value="1"> Evet

                                        <br>

                                        <input type="radio" name="soru3" class="soru3-" id="soru3-2" value="2"> Hayır
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        4.Çalışmalar için il dışına seyahat düşünülüyor mu?
                                    </td>
                                    <td class="">
                                        <input type="radio" name="soru4" class="soru4-" id="soru4-1" value="1"> Evet

                                        <br>

                                        <input type="radio" name="soru4" class="soru4-" id="soru4-2" value="2"> Hayır
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        5.Üniversite dışından destek (iş birliği) alınacak mı?
                                    </td>
                                    <td class="">
                                        <input type="radio" name="soru5" class="soru5-" id="soru5-1" value="1"> Evet

                                        <br>

                                        <input type="radio" name="soru5" class="soru5-" id="soru5-2" value="2"> Hayır
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        6.Proje başvurusu düşünülüyor mu?
                                    </td>
                                    <td class="">
                                        <input type="radio" name="soru6" class="soru6-" id="soru6-1" value="1"> Evet

                                        <br>

                                        <input type="radio" name="soru6" class="soru6-" id="soru6-2" value="2"> Hayır
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        7.Tez başlığı (Türkçe ve İngilizce) internet ortamında tarandı mı?
                                    </td>
                                    <td class="">
                                        <input type="radio" name="soru7" class="soru7-" id="soru7-1" value="1"> Evet

                                        <br>

                                        <input type="radio" name="soru7" class="soru7-" id="soru7-2" value="2"> Hayır
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        8.Ticari bir ürün   çıkması muhtemel mi?
                                    </td>
                                    <td class="">
                                        <input type="radio" name="soru8" class="soru8-" id="soru8-1" value="1"> Evet

                                        <br>

                                        <input type="radio" name="soru8" class="soru8-" id="soru8-2" value="2"> Hayır
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        9.Patent alınması muhtemel mi?
                                    </td>
                                    <td class="">
                                        <input type="radio" name="soru9" class="soru9-" id="soru9-1"  value="1"> Evet

                                        <br>

                                        <input type="radio" name="soru9" class="soru9-" id="soru9-2" value="2"> Hayır
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        10.Öğrenciye ait girişimcilik (KOSGEB) sertifikası var mı?
                                    </td>
                                    <td class="">
                                        <input type="radio" name="soru10" class="soru10-" id="soru10-1" value="1"> Evet

                                        <br>

                                        <input type="radio" name="soru10" class="soru10-" id="soru10-2" value="2"> Hayır
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        11.Tez konusuna dış paydaş katkısı var mı?
                                    </td>
                                    <td class="">
                                        <input type="radio" name="soru11" class="soru11-" id="soru11-1" value="1"> Evet

                                        <br>

                                        <input type="radio" name="soru11" class="soru11-" id="soru11-2" value="2"> Hayır
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        12.Tez Çalışması disiplinler arası nitelikte mi?
                                    </td>
                                    <td class="">
                                        <input type="radio" name="soru12" class="soru12-" id="soru12-1" value="1"> Evet

                                        <br>

                                        <input type="radio" name="soru12" class="soru12-" id="soru12-2" value="2"> Hayır
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        13.Ökinci Danışman ataması düşünülüyor mu?
                                    </td>
                                    <td class="">
                                        <input type="radio" name="soru13" class="soru13-" id="soru13-1" value="1"> Evet

                                        <br>

                                        <input type="radio" name="soru13" class="soru13-" id="soru13-2" value="2"> Hayır
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        14.Öğrencinin Tez çalışması için laboratuvar bilgi düzeyi nedir?
                                    </td>
                                    <td class="">
                                        <input type="radio" name="soru14" class="soru14-" id="soru14-1" value="1"> Kötü

                                        <br>

                                        <input type="radio" name="soru14" class="soru14-" id="soru14-2" value="2"> Orta

                                        <br>

                                        <input type="radio" name="soru14" class="soru14-" id="soru14-3" value="3"> İyi

                                        <br>

                                        <input type="radio" name="soru14" class="soru14-" id="soru14-4" value="4"> Gerekmiyor
                                    </td>
                                </tr>

                                <tr>
                                    <td>15.Destekleyen Kurum veya kuruluş var mı? Lütfen belirtiniz :
                                        <input type="text" name="destek-kurum" id="destek-kurum" value="" class="form-doktora"  placeholder="Kurum veya Kuruluş Adı">
                                        <label class="kurumUyari"></label>
                                    </td>
                                    <td class="">
                                        <input type="radio" name="soru15" class="soru15-" id="soru15-1"  value="1"> Var

                                        <br>

                                        <input type="radio" name="soru15" class="soru15-" id="soru15-2" value="2"> Yok
                                    </td>
                                </tr>
                                <tr>
                                    <td>16.Çalışma alanı hangi sektörü  ilgilendiriyor?</td>
                                    <td>Lütfen belirtiniz :
                                        <input type="text" name="soru16" id="soru16" class="form-doktora" value="" placeholder="">
                                    </td>
                                </tr>
                            </table>
                            <label class="istatistikSoruUyari"></label>
                        </div>

                        <br>
                        <br>

                        <div class="submit">
                            <input type="button" value="Devam" id="button-blue" onclick="" class="form-control shadow-none devam17" />
                            <div class="ease"></div>
                        </div>

                    </div>

                    <div id="tab18" class="tab-content">

                        <h3 style="color: #333"><b>Ayrıntılar</b></h3>

                        <br>

                        <h5>10. Akademik Çalışma Beyannamesi</h5>
                        <div style="text-align: left;">
                            <b>GEREKÇE: 2547 sayılı Kanunun (değişik: 02/12/2016 – KHK – 6764/26-30) 53. Maddesi.</b>

                            <hr>

                            <b>Öğrenci olarak</b> imzaladığım bu Tez Konusu Önerisi ve Planı’nı aşağıda adı ve imzası bulunan danışmanımın gözetiminde hazırladığımı, bu Formda konu detßayları verilen ve çalışma planı sunulan tez konusunda çalışmaya istekli olduğumu,resmi belgeye dayalı herhangi bir sağlık, idari, hukuki veya maddi sebep bulunmadığı sürece danışmanımın tez konusu ile ilgili vereceği akademik görevleri zamanında ve eksiksiz yerine getirmek için gayret edeceğimi, 2547 sayılı Yükseköğretim Kanunu’nun Disiplin konulu 53. Maddesi ve devamında tanımlandığı gibi; Tez çalışmalarımdan elde edilecek sonuçların herhangi bir biçimde saptırılmasının veya eksiltilmesinin suç olduğunu bildiğimi, tez çalışmalarımdan elde edilecek sonuçları tüm dürüstlüğümle toplumsal sorumluluk ve etik kurallar çerçevesinde tezimde kullanacağımı, adı geçen Kanunla tanımlanan diğer akademik suçların neler olduğunu okuyup anladığımı, bu beyanlarımın aksi tespit edilmesi halde Enstitü Yönetim Kurulu tarafından alınacak tüm kararlara uyacağımı bildiririm.

                            <br>
                            <br>

                            <b>Tez Danışmanı olarak</b>, bu Tez Konusu ve Planı Önerisi’nin sorumlu olduğum bölümlerini titizlikle kontrol ettiğimi; resmi belgeye dayalı sağlık, idari veya hukuki bir problem bulunmadığı, öğrenciye vereceğim tez konusu ile ilgili akademik görevleri zamanında ve eksiksiz yerine getirdiği sürece tez danışmanlığı görevimi etik kurallara bağlı olarak yürüteceğimi, öğrencinin tez çalışmalarını tamamlayabilmesi için gerekli çalışma ortamını ve laboratuvar imkanlarını sağlayacağımı, 2547 sayılı Kanun’un Disiplin konulu 53. Maddesinde yer alan tüm akademik suç teşkil eden davranışları okuyup anladığımı ve bu suçlar hakkında toplumsal sorumluluğum ile eğitimci sorumluluğumun farkında  olarak öğrencimi her fırsatta bilinçlendirmek için çaba sarf edeceğimi, bu taahhütlerimin aksi tespit edilirse Enstitü Yönetim Kurulu tarafından alınacak tüm kararlara uyacağımı bildiririm.

                            <br>

                            <b>Yukarıdaki Akademik Çalışma Beyannamesini okuyup onayladığımızı ve her türlü hatadan ve yanlış beyandan doğacak yasal sorumluluğun bizlere ait olduğunu beyan ederiz. </b>
                        </div>

                        <br>
                        <br>
@csrf
                        <div class="submit">
                            <input type="submit" value="Gönder" id="button-blue" onclick="" class="form-control shadow-none" />
                            <div class="ease"></div>
                        </div>

                    </div>
                </div>
            </div>

        </form>
    </div>

    <div class="col-md-3"></div>
</div>

<br>

<!-- Optional JavaScript; choose one of the two! -->
<script src="{{asset('form2/js.js')}}"></script>
<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>