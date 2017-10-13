  <!--footer dakapanacak-->

<!--    kullanıcı email, kullanıcı adı, password ile sisteme giriş yapacak. formun nasıl görünecegi burada-->

        <!--oturum açma butonu işlemleri için gerekli olan kısım kayıt olma ve oturum açma hesabı-->
        <div >
            <ul class="nav navbar-nav navbar-right">
                <!--                                        kayıt paneli-->
                <li class="dropdown" >

                    <a href="http://phpoll.com/register" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Kayıt OL <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-lr animated flipInX" role="menu" style="min-width: 200px">
                        <div class="col-lg-12">
                            <div class="text-center"><h3><b>Register</b></h3></div>
                            <form id="ajax-register-form" action="login.php" method="post" role="form" autocomplete="off">
                                <div class="form-group">
                                    <input name="username" id="username" tabindex="1" class="form-control" placeholder="Kullanıcı Adı" value="" type="text">
                                </div>
                                <div class="form-group">
                                  <input name="email" id="email" tabindex="1" class="form-control" placeholder="Email Adresi" value="" type="email">
                               </div>
                               <div class="form-group">
                                  <input name="password" id="password" tabindex="2" class="form-control" placeholder="Parola" type="password">
                               </div>
                               <div class="form-group">
                                  <input name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Parola Onayla " type="password">
                               </div>
                               <div class="form-group">
                                  <div class="row">
                                      <div class="col-xs-6 col-xs-offset-3">
                                          <input name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-info" value="Kayıt OL" type="submit">
                                      </div>
                                 </div>
                               </div>
                                    <input class="hide" name="token" id="token" value="7c6f19960d63f53fcd05c3e0cbc434c0" type="hidden">
                            </form>
                        </div>
                    </ul>
                </li>
                <!--                                        login paneli-->
                <li class="dropdown" >
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Oturum Aç</b> <span class="caret"></span></a>
                    <ul id="login-dp" class="dropdown-menu" style="min-width: 200px">
                        <li>
                            <div class="row">
                                <div class="col-md-12">
                                    Login
                                    <div class="social-buttons">
                                        <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                                        <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                                    </div>
                                    veya
                                    <form class="form" role="form" method="post" action="../login.php" accept-charset="UTF-8" id="login-nav">
                                        <div class="form-group">
                                            <label class="sr-only" for="exampleInputEmail2">Email Adresi</label>
                                            <input type="email" class="form-control" id="InputEmail2" placeholder="Email address" required="">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="exampleInputPassword2">Parola</label>
                                            <input type="password" class="form-control" id="InputPassword2" placeholder="Password" required="">
                                            <div class="help-block text-right"><a href="">Parolayı Unut ?</a></div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block">Oturum Aç</button>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> Oturumu açık tut.
                                            </label>
                                        </div>
                                    </form>
                                </div>
                                <div class="bottom text-center">
                                    New here ? <a href="#"><b>Join Us</b></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
