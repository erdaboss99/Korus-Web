<style>
    footer{
        background-color: #282828;
    }
    .footer_facebook {
    background-image:url('/images/assets/footer_sprite.png');
    background-repeat: no-repeat;
    width: 40px;
    height: 40px;
    background-position: 0px 0px;
    display: inline-block;
}

.footer_facebook:hover{
    background-position: 0px -40px;
}

.footer_email {
    margin-left: 25px;
    background-image:url('/images/assets/footer_sprite.png');
    background-repeat: no-repeat;
    width: 40px;
    height: 40px;
    background-position: -70px 0px;
    display: inline-block;
}

.footer_email:hover{
    background-position: -70px -40px;
}
.footer_messages {
    margin: 15px auto 2px;
    width: 150px;
    text-align: center;
}

.footer_messages div{
    cursor: pointer;
}
.created{
    color: #ffffff;
    text-align: center;
}

.created span{
    font-weight: bold;
}

.created a{
    color: inherit;
    text-decoration: none;
}
</style>

<div class="sziluett" style="text-align: end">
    <img src="{{URL::asset('/images/assets/sziluett_eger.png')}}" width="30%" style="margin-right: 20%">
  </div>

<footer class="d-flex flex-wrap justify-content-between align-items-center py-3">

    

    

    <div class="row" style="width: 100%">
        <div class ="col justify-content-center">
            <ul class="nav justify-content-center" >
                <li class="nav-item"><a href="#" class="nav-link px-2 text-light">A kórus</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-light">Hírfolyam</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-light">Galéria</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-light">Eseménynaptár</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-light">Kapcsolat</a></li>
              </ul>
        </div>
        <div class ="col-md-16 justify-content-center">
        </div>
        <div class="footer_messages">
			<a href="https://www.facebook.com/egriersekifiukorus"><div class="footer_facebook">
			</div>
			</a>
			<a href="mailto:egerfiukorus@gmail.com">
			<div class="footer_email">
			</div>
			</a>
		</div>
        <div class="col-md-16 created">
            Készítette: <a href="http://www.qnszt.hu"><span>QNSZT</span> Kft</a>
        </div>
    </div>
  </footer>