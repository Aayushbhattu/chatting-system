<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    
    <title>Chat</title>
    @vite(['reosurces/css/app.css', 'resources/css/loggedinpage.css', 'resources/js/loggedinpage.js', 'resources/app/app.js'])
</head>

<body>

    <!-- start: Chat -->
    <section class="chat-section">
        <div class="chat-container">
            <!-- start: Sidebar -->
            <aside class="chat-sidebar">
                <a href="#" class="chat-sidebar-logo">
                    <i class="ri-chat-1-fill"></i>
                </a>
                <ul class="chat-sidebar-menu">
                    <li class="active"><a href="#" data-title="Chats"><i class="ri-chat-3-line"></i></a></li>
                    <li><a href="#" data-title="Contacts"><i class="ri-contacts-line"></i></a></li>
                    <li><a href="#" data-title="Documents"><i class="ri-folder-line"></i></a></li>
                    <li><a href="#" data-title="Settings"><i class="ri-settings-line"></i></a></li>
                    <li class="chat-sidebar-profile">
                        <button type="button" class="chat-sidebar-profile-toggle">
                            <img src="{{ Vite::asset('resources/images/pp.jpg') }}"
                                alt="">
                        </button>
                        <ul class="chat-sidebar-profile-dropdown">
                            <li><a href="#"><i class="ri-user-line"></i> Profile</a></li>
                            <li><a href="#"><i class="ri-logout-box-line"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </aside>
            <!-- end: Sidebar -->
            <!-- start: Content -->
            <div class="chat-content">
                <!-- start: Content side -->
                <div class="content-sidebar">
                    <div class="content-sidebar-title">Chats</div>
                    <form action="" class="content-sidebar-form">
                        <input type="search" class="content-sidebar-input" placeholder="Search...">
                        <button type="submit" class="content-sidebar-submit"><i class="ri-search-line"></i></button>
                    </form>
                    <div class="content-messages">
                        <ul class="content-messages-list">
                            
                            <li>
                                <a href="#" data-conversation="#conversation-2">
                                    <img class="content-message-image"
                                        src="{{ Vite::asset('resources/images/pp.jpg') }}"
                                        alt="">
                                    <span class="content-message-info">
                                        <span class="content-message-name">Someone</span>
                                        <span class="content-message-text">Message 1</span>
                                    </span>
                                    <span class="content-message-more">
                                        <span class="content-message-time">12:30</span>
                                    </span>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <!-- end: Content side -->
                <!-- start: Conversation -->
                <div class="conversation conversation-default active">
                    <i class="ri-chat-3-line"></i>
                    <p>Select chat and view conversation!</p>
                </div>
                <div class="conversation" id="conversation-1">
                    <div class="conversation-top">
                        <button type="button" class="conversation-back"><i class="ri-arrow-left-line"></i></button>
                        <div class="conversation-user">
                            <img class="conversation-user-image"
                                src="{{ Vite::asset('resources/images/pp.jpg') }}"
                                alt="">
                            <div>
                                <div class="conversation-user-name">Someone</div>
                                <div class="conversation-user-status online">online</div>
                            </div>
                        </div>
                        <div class="conversation-buttons">
                            <button type="button"><i class="ri-phone-fill"></i></button>
                            <button type="button"><i class="ri-vidicon-line"></i></button>
                            <button type="button"><i class="ri-information-line"></i></button>
                        </div>
                    </div>
                    <div class="conversation-main">
                        <ul class="conversation-wrapper">
                            <div class="coversation-divider"><span>Today</span></div>
                            <li class="conversation-item me">
                                <div class="conversation-item-side">
                                    <img class="conversation-item-image"
                                        src="{{ Vite::asset('resources/images/pp.jpg') }}"
                                        alt="">
                                </div>
                                <div class="conversation-item-content">
                                    <div class="conversation-item-wrapper">
                                        <div class="conversation-item-box">
                                            <div class="conversation-item-text">
                                                <p>Message 2</p>
                                                <div class="conversation-item-time">12:30</div>
                                            </div>
                                            <div class="conversation-item-dropdown">
                                                <button type="button" class="conversation-item-dropdown-toggle"><i
                                                        class="ri-more-2-line"></i></button>
                                                <ul class="conversation-item-dropdown-list">
                                                    <li><a href="#"><i class="ri-share-forward-line"></i>
                                                            Forward</a></li>
                                                    <li><a href="#"><i class="ri-delete-bin-line"></i>
                                                            Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="conversation-item-wrapper">
                                        <div class="conversation-item-box">
                                            <div class="conversation-item-text">
                                                <p>Message 3</p>
                                                <div class="conversation-item-time">12:30</div>
                                            </div>
                                            <div class="conversation-item-dropdown">
                                                <button type="button" class="conversation-item-dropdown-toggle"><i
                                                        class="ri-more-2-line"></i></button>
                                                <ul class="conversation-item-dropdown-list">
                                                    <li><a href="#"><i class="ri-share-forward-line"></i>
                                                            Forward</a></li>
                                                    <li><a href="#"><i class="ri-delete-bin-line"></i>
                                                            Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="conversation-item">
                                <div class="conversation-item-side">
                                    <img class="conversation-item-image"
                                        src="{{ Vite::asset('resources/images/pp.jpg') }}"
                                        alt="">
                                </div>
                                <div class="conversation-item-content">
                                    <div class="conversation-item-wrapper">
                                        <div class="conversation-item-box">
                                            <div class="conversation-item-text">
                                                <p>Message 4</p>
                                                <div class="conversation-item-time">12:30</div>
                                            </div>
                                            <div class="conversation-item-dropdown">
                                                <button type="button" class="conversation-item-dropdown-toggle"><i
                                                        class="ri-more-2-line"></i></button>
                                                <ul class="conversation-item-dropdown-list">
                                                    <li><a href="#"><i class="ri-share-forward-line"></i>
                                                            Forward</a></li>
                                                    <li><a href="#"><i class="ri-delete-bin-line"></i>
                                                            Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="conversation-item-wrapper">
                                        <div class="conversation-item-box">
                                            <div class="conversation-item-text">
                                                <p>Message 5</p>
                                                <div class="conversation-item-time">12:30</div>
                                            </div>
                                            <div class="conversation-item-dropdown">
                                                <button type="button" class="conversation-item-dropdown-toggle"><i
                                                        class="ri-more-2-line"></i></button>
                                                <ul class="conversation-item-dropdown-list">
                                                    <li><a href="#"><i class="ri-share-forward-line"></i>
                                                            Forward</a></li>
                                                    <li><a href="#"><i class="ri-delete-bin-line"></i>
                                                            Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="conversation-item-wrapper">
                                        <div class="conversation-item-box">
                                            <div class="conversation-item-text">
                                                <p>Message 6</p>
                                                <div class="conversation-item-time">12:30</div>
                                            </div>
                                            <div class="conversation-item-dropdown">
                                                <button type="button" class="conversation-item-dropdown-toggle"><i
                                                        class="ri-more-2-line"></i></button>
                                                <ul class="conversation-item-dropdown-list">
                                                    <li><a href="#"><i class="ri-share-forward-line"></i>
                                                            Forward</a></li>
                                                    <li><a href="#"><i class="ri-delete-bin-line"></i>
                                                            Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="conversation-item me">
                                <div class="conversation-item-side">
                                    <img class="conversation-item-image"
                                        src="{{ Vite::asset('resources/images/pp.jpg') }}"
                                        alt="">
                                </div>
                                <div class="conversation-item-content">
                                    <div class="conversation-item-wrapper">
                                        <div class="conversation-item-box">
                                            <div class="conversation-item-text">
                                                <p>Message 7</p>
                                                <div class="conversation-item-time">12:30</div>
                                            </div>
                                            <div class="conversation-item-dropdown">
                                                <button type="button" class="conversation-item-dropdown-toggle"><i
                                                        class="ri-more-2-line"></i></button>
                                                <ul class="conversation-item-dropdown-list">
                                                    <li><a href="#"><i class="ri-share-forward-line"></i>
                                                            Forward</a></li>
                                                    <li><a href="#"><i class="ri-delete-bin-line"></i>
                                                            Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="conversation-item-wrapper">
                                        <div class="conversation-item-box">
                                            <div class="conversation-item-text">
                                                <p>Message 8</p>
                                                <div class="conversation-item-time">12:30</div>
                                            </div>
                                            <div class="conversation-item-dropdown">
                                                <button type="button" class="conversation-item-dropdown-toggle"><i
                                                        class="ri-more-2-line"></i></button>
                                                <ul class="conversation-item-dropdown-list">
                                                    <li><a href="#"><i class="ri-share-forward-line"></i>
                                                            Forward</a></li>
                                                    <li><a href="#"><i class="ri-delete-bin-line"></i>
                                                            Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="conversation-item-wrapper">
                                        <div class="conversation-item-box">
                                            <div class="conversation-item-text">
                                                <p>Message 9</p>
                                                <div class="conversation-item-time">12:30</div>
                                            </div>
                                            <div class="conversation-item-dropdown">
                                                <button type="button" class="conversation-item-dropdown-toggle"><i
                                                        class="ri-more-2-line"></i></button>
                                                <ul class="conversation-item-dropdown-list">
                                                    <li><a href="#"><i class="ri-share-forward-line"></i>
                                                            Forward</a></li>
                                                    <li><a href="#"><i class="ri-delete-bin-line"></i>
                                                            Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="conversation-form">
                        <button type="button" class="conversation-form-button"><i
                                class="ri-emotion-line"></i></button>
                        <div class="conversation-form-group">
                            <textarea class="conversation-form-input" rows="1" placeholder="Type here..."></textarea>
                            <button type="button" class="conversation-form-record"><i
                                    class="ri-mic-line"></i></button>
                        </div>
                        <button type="button" class="conversation-form-button conversation-form-submit"><i
                                class="ri-send-plane-2-line"></i></button>
                    </div>
                </div>
                <div class="conversation" id="conversation-2">
                    <div class="conversation-top">
                        <button type="button" class="conversation-back"><i class="ri-arrow-left-line"></i></button>
                        <div class="conversation-user">
                            <img class="conversation-user-image"
                                src="{{ Vite::asset('resources/images/pp.jpg') }}"
                                alt="">
                            <div>
                                <div class="conversation-user-name">Someone 1</div>
                                <div class="conversation-user-status online">online</div>
                            </div>
                        </div>
                        <div class="conversation-buttons">
                            <button type="button"><i class="ri-phone-fill"></i></button>
                            <button type="button"><i class="ri-vidicon-line"></i></button>
                            <button type="button"><i class="ri-information-line"></i></button>
                        </div>
                    </div>
                    <div class="conversation-main">
                        <ul class="conversation-wrapper">
                            <div class="coversation-divider"><span>Today</span></div>
                            <li class="conversation-item me">
                                <div class="conversation-item-side">
                                    <img class="conversation-item-image"
                                        src="{{ Vite::asset('resources/images/pp.jpg') }}"
                                        alt="">
                                </div>
                                <div class="conversation-item-content">
                                    <div class="conversation-item-wrapper">
                                        <div class="conversation-item-box">
                                            <div class="conversation-item-text">
                                                <p>Message 1</p>
                                                <div class="conversation-item-time">12:30</div>
                                            </div>
                                            <div class="conversation-item-dropdown">
                                                <button type="button" class="conversation-item-dropdown-toggle"><i
                                                        class="ri-more-2-line"></i></button>
                                                <ul class="conversation-item-dropdown-list">
                                                    <li><a href="#"><i class="ri-share-forward-line"></i>
                                                            Forward</a></li>
                                                    <li><a href="#"><i class="ri-delete-bin-line"></i>
                                                            Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="conversation-item-wrapper">
                                        <div class="conversation-item-box">
                                            <div class="conversation-item-text">
                                                <p>Message 2</p>
                                                <div class="conversation-item-time">12:30</div>
                                            </div>
                                            <div class="conversation-item-dropdown">
                                                <button type="button" class="conversation-item-dropdown-toggle"><i
                                                        class="ri-more-2-line"></i></button>
                                                <ul class="conversation-item-dropdown-list">
                                                    <li><a href="#"><i class="ri-share-forward-line"></i>
                                                            Forward</a></li>
                                                    <li><a href="#"><i class="ri-delete-bin-line"></i>
                                                            Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="conversation-item">
                                <div class="conversation-item-side">
                                    <img class="conversation-item-image"
                                        src="{{ Vite::asset('resources/images/pp.jpg') }}"
                                        alt="">
                                </div>
                                <div class="conversation-item-content">
                                    <div class="conversation-item-wrapper">
                                        <div class="conversation-item-box">
                                            <div class="conversation-item-text">
                                                <p>Message 3</p>
                                                <div class="conversation-item-time">12:30</div>
                                            </div>
                                            <div class="conversation-item-dropdown">
                                                <button type="button" class="conversation-item-dropdown-toggle"><i
                                                        class="ri-more-2-line"></i></button>
                                                <ul class="conversation-item-dropdown-list">
                                                    <li><a href="#"><i class="ri-share-forward-line"></i>
                                                            Forward</a></li>
                                                    <li><a href="#"><i class="ri-delete-bin-line"></i>
                                                            Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="conversation-item-wrapper">
                                        <div class="conversation-item-box">
                                            <div class="conversation-item-text">
                                                <p>Message 4</p>
                                                <div class="conversation-item-time">12:30</div>
                                            </div>
                                            <div class="conversation-item-dropdown">
                                                <button type="button" class="conversation-item-dropdown-toggle"><i
                                                        class="ri-more-2-line"></i></button>
                                                <ul class="conversation-item-dropdown-list">
                                                    <li><a href="#"><i class="ri-share-forward-line"></i>
                                                            Forward</a></li>
                                                    <li><a href="#"><i class="ri-delete-bin-line"></i>
                                                            Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="conversation-item-wrapper">
                                        <div class="conversation-item-box">
                                            <div class="conversation-item-text">
                                                <p>Message 5</p>
                                                <div class="conversation-item-time">12:30</div>
                                            </div>
                                            <div class="conversation-item-dropdown">
                                                <button type="button" class="conversation-item-dropdown-toggle"><i
                                                        class="ri-more-2-line"></i></button>
                                                <ul class="conversation-item-dropdown-list">
                                                    <li><a href="#"><i class="ri-share-forward-line"></i>
                                                            Forward</a></li>
                                                    <li><a href="#"><i class="ri-delete-bin-line"></i>
                                                            Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="conversation-item me">
                                <div class="conversation-item-side">
                                    <img class="conversation-item-image"
                                        src="{{ Vite::asset('resources/images/pp.jpg') }}"
                                        alt="">
                                </div>
                                <div class="conversation-item-content">
                                    <div class="conversation-item-wrapper">
                                        <div class="conversation-item-box">
                                            <div class="conversation-item-text">
                                                <p>Message 6</p>
                                                <div class="conversation-item-time">12:30</div>
                                            </div>
                                            <div class="conversation-item-dropdown">
                                                <button type="button" class="conversation-item-dropdown-toggle"><i
                                                        class="ri-more-2-line"></i></button>
                                                <ul class="conversation-item-dropdown-list">
                                                    <li><a href="#"><i class="ri-share-forward-line"></i>
                                                            Forward</a></li>
                                                    <li><a href="#"><i class="ri-delete-bin-line"></i>
                                                            Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="conversation-item-wrapper">
                                        <div class="conversation-item-box">
                                            <div class="conversation-item-text">
                                                <p>Message 7</p>
                                                <div class="conversation-item-time">12:30</div>
                                            </div>
                                            <div class="conversation-item-dropdown">
                                                <button type="button" class="conversation-item-dropdown-toggle"><i
                                                        class="ri-more-2-line"></i></button>
                                                <ul class="conversation-item-dropdown-list">
                                                    <li><a href="#"><i class="ri-share-forward-line"></i>
                                                            Forward</a></li>
                                                    <li><a href="#"><i class="ri-delete-bin-line"></i>
                                                            Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="conversation-item-wrapper">
                                        <div class="conversation-item-box">
                                            <div class="conversation-item-text">
                                                <p>Message 8</p>
                                                <div class="conversation-item-time">12:30</div>
                                            </div>
                                            <div class="conversation-item-dropdown">
                                                <button type="button" class="conversation-item-dropdown-toggle"><i
                                                        class="ri-more-2-line"></i></button>
                                                <ul class="conversation-item-dropdown-list">
                                                    <li><a href="#"><i class="ri-share-forward-line"></i>
                                                            Forward</a></li>
                                                    <li><a href="#"><i class="ri-delete-bin-line"></i>
                                                            Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="conversation-form">
                        <button type="button" class="conversation-form-button"><i
                                class="ri-emotion-line"></i></button>
                        <div class="conversation-form-group">
                            <textarea class="conversation-form-input" rows="1" placeholder="Type here..."></textarea>
                            <button type="button" class="conversation-form-record"><i
                                    class="ri-mic-line"></i></button>
                        </div>
                        <button type="button" class="conversation-form-button conversation-form-submit"><i
                                class="ri-send-plane-2-line"></i></button>
                    </div>
                </div>
                <!-- end: Conversation -->
            </div>
            <!-- end: Content -->
        </div>
    </section>
    <!-- end: Chat -->

</body>

</html>