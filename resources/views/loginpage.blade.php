<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/loginpage.css','resources/css/app.css','resources/js/app.js','resources/js/loginpage.js','resources/css/chatbox.css','resources/js/chatbox.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Login</title>
</head>

<body class="h-full w-full overflow-y-hidden">
    <div class="container">
        <div class="screen">
            <div class="screen__content">
                <form id="log"  class="login">
                    <div class="login__field">
                        <i class="login__icon fas fa-user"></i>
                        <input type="text" class="login__input" placeholder="User name / Email">
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-lock"></i>
                        <input type="password" class="login__input" placeholder="Password">
                    </div>
                    <button class="button login__submit">
                        <span class="button__text">Log In</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>				
                </form>
                <div class="flex justify-center items-center text-white mt-20">
                    <a href="#" id="signup" class="no-underline text-white text-[18px]">Sign Up</a>
                </div>
            </div>
            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>		
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>		
        </div>
    </div>
    <div class="content-md-lg py-3">
        <!-- Chatbox Wrapper -->
        <div id="chatbox-wrapper">
            <div id="chatbox-btn-wrapper">
                <span class="material-symbols-outlined">chat</span>
            </div>
            <div id="chatbox">
                <div class="chatbox-dialog">
                    <div class="chatbox-header">
                        <div class="chat-title">Talk to us</div>
                        <div class="chat-tools">
                            <button class="chatbox-close"><span class="material-symbols-outlined">close</span></button>
                        </div>
                    </div>
                    <div class="chatbox-body">
                            <div class="chatbox-item chatbox-msg-receiver">
                                <div class="chatbox-user-avatar"><span class="material-symbols-outlined">person</span></div>
                                <div class="chatbox-item-content-wrapper">
                                    <span class="chatbox-item-content">Donec ac augue sed mauris bibendum scelerisque. Integer pharetra, diam et rutrum sagittis, eros nisl dictum turpis, non mattis lorem metus in massa.</span>
                                </div>
                            </div>
                            <div class="chatbox-item chatbox-msg-sender">
                                <div class="chatbox-user-avatar"><span class="material-symbols-outlined">person</span></div>
                                <div class="chatbox-item-content-wrapper">
                                    <span class="chatbox-item-content">Integer ultrices ante massa, vitae bibendum enim tempus et</span>
                                </div>
                            </div>
                        <div class="chatbox-item chatbox-msg-receiver">
                            <div class="chatbox-user-avatar"><span class="material-symbols-outlined">person</span></div>
                            <div class="chatbox-item-content-wrapper">
                                <span class="chatbox-item-content">Nullam maximus erat sed vestibulum egestas. Proin feugiat libero eu auctor condimentum. </span>
                            </div>
                        </div>
                        <div class="chatbox-item chatbox-msg-sender">
                            <div class="chatbox-user-avatar"><span class="material-symbols-outlined">person</span></div>
                            <div class="chatbox-item-content-wrapper">
                                <span class="chatbox-item-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                            </div>
                        </div>
                        <div class="chatbox-item chatbox-msg-receiver">
                            <div class="chatbox-user-avatar"><span class="material-symbols-outlined">person</span></div>
                            <div class="chatbox-item-content-wrapper">
                                <span class="chatbox-item-content">Vivamus varius eleifend interdum. Proin sit amet felis scelerisque</span>
                            </div>
                        </div>
                        <div class="chatbox-item chatbox-msg-sender">
                            <div class="chatbox-user-avatar"><span class="material-symbols-outlined">person</span></div>
                            <div class="chatbox-item-content-wrapper">
                                <span class="chatbox-item-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                            </div>
                        </div>
                        <div class="chatbox-item chatbox-msg-receiver">
                            <div class="chatbox-user-avatar"><span class="material-symbols-outlined">person</span></div>
                            <div class="chatbox-item-content-wrapper">
                                <span class="chatbox-item-content">Hi!</span>
                            </div>
                        </div>
                        <div class="chatbox-item chatbox-msg-sender">
                            <div class="chatbox-user-avatar"><span class="material-symbols-outlined">person</span></div>
                            <div class="chatbox-item-content-wrapper">
                                <span class="chatbox-item-content">Hello =)</span>
                            </div>
                        </div>
                    </div>
                    <div class="chatbox-footer">
                        <div class="chatbox-field-wrapper">
                            <textarea name="message" id="chatbox-message-field" placeholder="Type a message..."></textarea>
                        </div>
                        <div class="chatbox-btn-wrapper">
                            <button id="chatbox-send-btn"><span class="material-symbols-outlined">send</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Chatbox Wrapper -->
    </div>
</body>

</html>