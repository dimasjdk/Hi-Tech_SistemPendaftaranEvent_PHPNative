<style type="text/css">
    .demo
{
    padding: 100px 0;
}
.main-timeline{
    position: relative;
    transition: all 0.4s ease 0s;
}

.main-timeline:before{
    content: "";
    width: 3px;
    height: 100%;
    background: #bfbfbf;
    position: absolute;
    top: 0;
    left: 50%;
}

.main-timeline .timeline{
    position: relative;
}

.main-timeline .timeline:before,
.main-timeline .timeline:after{
    content: "";
    display: block;
    width: 100%;
    clear: both;
}

.main-timeline .timeline-icon{
    width: 20px;
    height: 20px;
    border-radius: 50%;
    background: #fff;
    border: 2px solid #0a90d7;
    position: absolute;
    top: 0;
    left: 3px;
    right: 0;
    margin: 0 auto;
    overflow: hidden;
}

.main-timeline .timeline-content{
    width: 47%;
    padding: 20px;
    border-radius: 5px;
    text-align: right;
    -webkit-box-shadow: 0 3px 0 rgba(0, 0, 0, 0.1);
    -moz-box-shadow: 0 3px 0 rgba(0, 0, 0, 0.1);
    -ms-box-shadow: 0 3px 0 rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease 0s;
}

.main-timeline .date{
    display: inline-block;
    font-size: 16px;
    font-weight: 300;
    color: #fff;
    padding: 12px 33px;
    background: #0a90d7;
    border-radius: 30px;
}

.main-timeline .title{
    font-size: 20px;
    font-weight: 500;
    color: #5c5151;
    margin-top: 30px;
}

.main-timeline .description{
    font-size: 14px;
    color: #606060;
    line-height: 2;
}

.main-timeline .timeline-content.right{
    float: right;
    text-align: left;
}

@media only screen and (max-width: 767px){
    .main-timeline:before{
        left: 0;
    }
    .main-timeline .timeline-icon{
        left: -8px;
        margin: 0;
    }
    .main-timeline .timeline-content{
        width: 90%;
        float: right;
    }
}@charset "utf-8";
/* CSS Document */


</style>

 <div class="demo">
        <div class="container" style="text-align: center;">
            <div style="text-align: center;">
                <h3>Timeline Hi-Technology 2019 </h3>
            </div>
            <br><br>

            <div class="row">
                <div class="col-md-2">
                    <div class="main-timeline">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="main-timeline">
                        <div class="timeline">
                            <div class="timeline-icon"></div>
                            <div class="timeline-content">
                                <span class="date"> 9 Febuary - 16 Maret 2019</span>
                                <h4 class="title">Registration</h4>
                                <p class="description">
                                    Pendaftaran dilakukan secara online melalui website <b><i>hi-technology.id</i></b> atau bisa daftar langsung di Universitas Dian Nuswantoro Gedung H Lt.1 & Gedung D Lt.1
                                </p>
                            </div>
                        </div>

                        <div class="timeline">
                            <div class="timeline-icon"></div>
                            <div class="timeline-content right">
                                <span class="date"> 9 Febuary - 16 Maret 2019</span>
                                <h4 class="title">Payment</h4>
                                <p class="description">
                                    Lakukan Transaksi Pembayaran Melalui :<br>
                                    Rekening BRI : 5888-01-010401-530 (Ismiranti)
                                    Rekening BNI : 0691572232 (Haryo Prabu Sukma D)
                                </p>
                            </div>
                        </div>

                        <div class="timeline">
                            <div class="timeline-icon"></div>
                            <div class="timeline-content">
                                <span class="date"> 9 Febuary - 15 Maret 2019</span>
                                <h4 class="title">Confirm Payment</h4>
                                <p class="description">
                                    Lakukan Konfirmasi Pembayaran Melalui :<br>
                                    Ismiranti : 081326293356 <b>(BRI)</b><br>
                                    Prabu : 081247297626 <b>(BNI)</b><br>
                                    Format Konfirmasi : DAFTAR_(EVENT)_LUNAS (disertai bukti transfer)

                                </p>
                            </div>
                        </div>

                        <div class="timeline">
                            <div class="timeline-icon"></div>
                            <div class="timeline-content right">
                                <span class="date">16 Maret 2019</span>
                                <h5 class="title">Opening Hi-Technology 2019</h5>
                                <p class="description">
                                    Aula Gedung H Lt.7 Universitas Dian Nuswantoro
                                    Pukul 07.00 - 11.00 WIB
                                </p>
                            </div>
                        </div>

                        <div class="timeline">
                            <div class="timeline-icon"></div>
                            <div class="timeline-content">
                                <span class="date"> 16 Maret 2019</span>
                                <h4 class="title">Workshop</h4>
                                <p class="description">
                                    Laboratorium Komputer Gedung D Lt.2.A Universitas Dian Nuswantoro<br>
                                    Pukul 10.00 - 17.00 WIB
                                </p>
                            </div>
                        </div>

                        <div class="timeline">
                            <div class="timeline-icon"></div>
                            <div class="timeline-content right">
                                <span class="date">23 Maret 2019</span>
                                <h5 class="title">Mini Hackhaton</h5>
                                <p class="description">
                                    Aula Gedung E Lt.3 Universitas Dian Nuswantoro
                                    Pukul 07.00 - 15.00 WIB
                                </p>
                            </div>
                        </div>

                        <div class="timeline">
                            <div class="timeline-icon"></div>
                            <div class="timeline-content">
                                <span class="date"> 1 April - 2 April 2019</span>
                                <h4 class="title">Software Fair</h4>
                                <p class="description">
                                    Galeri Gedung H Lt.1 Universitas Dian Nuswantoro
                                    Pukul 07.00 - 15.00 WIB
                                </p>
                            </div>
                        </div>

                        <div class="timeline">
                            <div class="timeline-icon"></div>
                            <div class="timeline-content right">
                                <span class="date">2 April 2019</span>
                                <h4 class="title">Closing & Awarding<br>Hi-Technology 2019</h5>
                                <p class="description">
                                    Aula Gedung H Lt.7 Universitas Dian NUswantoro
                                    Pukul 12.30 - 16.00 WIB
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="main-timeline">
                    </div>
                </div>
            </div>
        </div>
    </div>

