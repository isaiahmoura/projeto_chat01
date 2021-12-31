<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/home_app.js"></script>
<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/home.css">
<section class="container_left">
    <div class="input_search_area">
        <input 
            type="text" 
            name="search_friend" 
            id="input_search" 
            onkeypress="show_friends_result()"
            placeholder="Pessoas, grupos, mensagens"
        >
        <div class="button_phone">
            <button><img src="assets/images/phone_call.png" alt=""></button>
        </div>
    </div>
    <div class="search_icons">
        <div class="search_icon_img" onclick="view_searchShow()">
            <img src="assets/images/pesquisa_lupa.png" alt="">
        </div>
        <div class="search_icon_img" onclick="view_friendsShow()">
            <img src="assets/images/friends.png" alt="">
        </div>
        <div class="search_icon_img">
            <img src="assets/images/notification.png" alt="">
        </div>
        <div class="search_icon_img" onclick="view_callsShow()">
            <img src="assets/images/phone_call.png" alt="">
        </div>
        <div class="search_icon_img" onclick="view_messagesShow()">
            <img src="assets/images/message.png" alt="">
        </div>
    </div>
    <div class="social_content">
        
    </div>
</section>

<section class="container_right">
    <div class="message_no_choose">
        <img src="assets/images/message.png" alt="">
        <h2>Converse com alguêm agora...</h2>
        <h4>Nenhuma mensagem encontrada..</h4>
    </div>
    <div class="message_choose">
        <div class="messages_txt">
            <div class="message_center">
                <div class="message_friend">
                    como vc esta?
                </div>
                <div class="message_me">
                    vou bem vlw
                </div>
                <div class="message_me">
                    e voce?
                </div>
                <div class="message_friend">
                    vou bem tbm kkkkkkk
                </div>
                <div class="message_friend">
                    que legal :) kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk
                </div>
                <div class="message_me">
                    kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk
                </div>
                <div class="message_me">
                    kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk
                </div>
                <div class="message_me">
                    kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk
                </div>
            </div>
        </div>
        <div class="message_bottom">
            <input type="text" placeholder="Envie uma mensagem...">
            <button><img src="assets/images/send_message.png" alt=""></button>
        </div>
    </div>
</section>