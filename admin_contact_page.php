<?php
    // checking if you already logged in, if not youll go back to log in page
    session_start();
    if(empty($_SESSION["username"]) && empty($_SESSION["password"])){
        header("location: ./admin_log_in_form.php?bad_msg=You need to log in FIRST!!");
    }
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contactsDesign.css">
    <title>Contact Page</title>
</head>
<body>
    <!--for the nav-->
    <div id="header">
        <h1>Houses.com</h1>

        <!--for the shortcuts/links-->
        <nav>
            <ul>
                <li><a href="admin_home_page.php">Homes</a></li>
                <li><a href="#">Reservations</a></li>
                <li><a href="admin_contact_page.php">Contacts</a></li>
            </ul>
        </nav>
    </div>

    <div id="contactContainer">
        <div id="pictureContainer">
            <div id="picture">
                <div id="savanaPic" class="pic"></div>
                <div id="santeviPic" class="pic"></div>
                <div id="caliyaPic" class="pic"></div>
                <div id="carmelPic" class="pic"></div>
                <div id="overlayPic"></div>
            </div>

            <div id="context">
                <h1>Contact Us in Here</h1>
                <p>just click the icons below for the details.</p>
            </div>
        </div>

        <div id="contactsIconContainer">
            <div id="contactIcons">
                <div id="fbIcon" class="icons">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);"><path d="M20 3H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325 1.42-3.592 3.5-3.592.699-.002 1.399.034 2.095.107v2.42h-1.435c-1.128 0-1.348.538-1.348 1.325v1.735h2.697l-.35 2.725h-2.348V21H20a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1z"></path></svg>

                    <p>
                        You can contact us in Facebook to ask some guidance or to ask some specific informmation that wasn't included in the page.
                    </p>

                    <div id="ourFb" class="contactsInfo">
                        <ul>
                            <li><a href="https://www.facebook.com/Andrie.Anenias.08" target="_blank">John Andrei Anenias</a></li>
                            <li><a href="https://www.facebook.com/clarkdavid.m.catle" target="_blank">Clark David Catle</a></li>
                            <li><a href="https://www.facebook.com/jasper.tolentino.9231" target="_blank">Jasper Tolentino</a></li>
                        </ul>
                    </div>
                </div>

                <div id="igIcon" class="icons">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);"><path d="M20.947 8.305a6.53 6.53 0 0 0-.419-2.216 4.61 4.61 0 0 0-2.633-2.633 6.606 6.606 0 0 0-2.186-.42c-.962-.043-1.267-.055-3.709-.055s-2.755 0-3.71.055a6.606 6.606 0 0 0-2.185.42 4.607 4.607 0 0 0-2.633 2.633 6.554 6.554 0 0 0-.419 2.185c-.043.963-.056 1.268-.056 3.71s0 2.754.056 3.71c.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.043 1.268.056 3.71.056s2.755 0 3.71-.056a6.59 6.59 0 0 0 2.186-.419 4.615 4.615 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.187.043-.962.056-1.267.056-3.71-.002-2.442-.002-2.752-.058-3.709zm-8.953 8.297c-2.554 0-4.623-2.069-4.623-4.623s2.069-4.623 4.623-4.623a4.623 4.623 0 0 1 0 9.246zm4.807-8.339a1.077 1.077 0 0 1-1.078-1.078 1.077 1.077 0 1 1 2.155 0c0 .596-.482 1.078-1.077 1.078z"></path><circle cx="11.994" cy="11.979" r="3.003"></circle></svg>

                    <p>
                        You can also contact us in Instagram to ask some guidance or to ask some specific informmation that wasn't included in the page.
                    </p>

                    <div id="ourIg" class="contactsInfo">
                        <ul>
                            <li><a href="https://www.instagram.com/_andriyanongpogi/" target="_blank">_andriyanongpogi</a></li>
                            <li><a href="https://www.instagram.com/strange_bare/" target="_blank">strange_bare</a></li>
                            <li><a href="https://www.instagram.com/holyperr/" target="_blank">holyperr</a></li>
                        </ul>
                    </div>
                </div>

                <div id="gmialIcon" class="icons">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);"><path d="m18.73 5.41-1.28 1L12 10.46 6.55 6.37l-1.28-1A2 2 0 0 0 2 7.05v11.59A1.36 1.36 0 0 0 3.36 20h3.19v-7.72L12 16.37l5.45-4.09V20h3.19A1.36 1.36 0 0 0 22 18.64V7.05a2 2 0 0 0-3.27-1.64z"></path></svg>

                    <p>
                        If you prefer not to dm/pm us, you can message us through Gmail to ask some guidance or to ask some specific informmation that wasn't included in the page.
                    </p>

                    <div id="ourGmail" class="contactsInfo">
                        <ul>
                            <li><a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSGMGStpMvxMZJfFDFchWcjlhFCZjNGhtlgqJtlnXDCsnqdZGZjNbDWLzrkFpfdcwGRKkwQW" target="_blank">0332-1947@lspu.edu.ph</a></li>
                            <li><a href="https://mail.google.com/mail/u/0/#inbox?compose=DmwnWtDpKsbJDZxmRtbcCZNrsqWnSwXjzsLHlTgMxjVKXgLNCcNnrCkDKSQlXTtmLRJrhMSFhPQq" target="_blank">0322-1967@lspu.edu.ph</a></li>
                            <li><a href="https://mail.google.com/mail/u/0/#inbox?compose=DmwnWtMhFcsKfSjmKjBBVmfzpkrHSmMQtJxLFKGGkdvnbNgXvrsnpPNlPrpcBRdsTbgDbKqRCDTG" target="_blank">0322-1966@lspu.edu.ph</a></li>
                        </ul>
                    </div>
                </div>

                <div id="cpIcon" class="icons">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);"><path d="M20 10.999h2C22 5.869 18.127 2 12.99 2v2C17.052 4 20 6.943 20 10.999z"></path><path d="M13 8c2.103 0 3 .897 3 3h2c0-3.225-1.775-5-5-5v2zm3.422 5.443a1.001 1.001 0 0 0-1.391.043l-2.393 2.461c-.576-.11-1.734-.471-2.926-1.66-1.192-1.193-1.553-2.354-1.66-2.926l2.459-2.394a1 1 0 0 0 .043-1.391L6.859 3.513a1 1 0 0 0-1.391-.087l-2.17 1.861a1 1 0 0 0-.29.649c-.015.25-.301 6.172 4.291 10.766C11.305 20.707 16.323 21 17.705 21c.202 0 .326-.006.359-.008a.992.992 0 0 0 .648-.291l1.86-2.171a1 1 0 0 0-.086-1.391l-4.064-3.696z"></path></svg>

                    <p>
                        You can also contact us through our cellphone number so that you can contact us without internet to ask some guidance or to ask some specific informmation that wasn't included in the page.
                    </p>

                    <div id="ourCp" class="contactsInfo">
                        <ul>
                            <li>+63 *** *** ****</li>
                            <li>+63 *** *** ****</li>
                            <li>+63 *** *** ****</li>
                        </ul>
                    </div>
                </div>

                <div id="locIcon" class="icons">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);"><circle cx="12" cy="12" r="4"></circle><path d="M13 4.069V2h-2v2.069A8.01 8.01 0 0 0 4.069 11H2v2h2.069A8.008 8.008 0 0 0 11 19.931V22h2v-2.069A8.007 8.007 0 0 0 19.931 13H22v-2h-2.069A8.008 8.008 0 0 0 13 4.069zM12 18c-3.309 0-6-2.691-6-6s2.691-6 6-6 6 2.691 6 6-2.691 6-6 6z"></path></svg>

                    <p>
                        You can also do a walk in so that you we can talk comfotably to ask some guidance or to ask some specific informmation that wasn't included in the page.
                    </p>

                    <div id="ourLoc" class="contactsInfo">
                        <ul>
                            <li><a href="https://www.google.com/maps/@14.08241,121.3117256,3a,75y,61.27h,82.97t/data=!3m6!1e1!3m4!1sXISXiQhumy3viu-q0HZe7A!2e0!7i16384!8i8192?entry=ttu" target="_blank">LSPU-SPCC</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="contactFunction.js"></script>
</body>
</html>
