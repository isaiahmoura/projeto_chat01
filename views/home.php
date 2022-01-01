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
    <div class="modal_user">
        <div class="modal_header">
            <div class="modal_header_button">
                <button
                    onclick="modal_user_fechar()"
                ><img src="<?php echo BASE_URL; ?>assets/images/close.png" alt=""></button>
            </div>
            <div class="modal_header_user_img">
                <img src="<?php echo BASE_URL; ?>assets/images/user_default.png" alt="">
                <p>Isaias Moura</p>
            </div>
        </div>
        <div class="modal_user_center">
            <div class="modal_user_options">
                <div class="modal_user_options_img">
                    <img src="<?php echo BASE_URL; ?>assets/images/message.png" alt="">
                </div>
                <p>Enviar uma mensagem</p>
            </div>
            <div class="modal_user_options">
                <div class="modal_user_options_img">
                    <img src="<?php echo BASE_URL; ?>assets/images/phone_call.png" alt="">
                </div>
                <p>Iniciar uma chamada..</p>
            </div>
            <div class="modal_user_options">
                <div class="modal_user_options_img">
                    <img src="<?php echo BASE_URL; ?>assets/images/share.png" alt="">
                </div>
                <p>Compartilhar contato.</p>
            </div>
            <div class="modal_user_options">
                <div class="modal_user_options_img">
                    <img src="<?php echo BASE_URL; ?>assets/images/team.png" alt="">
                </div>
                <p>Criar um grupo com Isaias Moura</p>
            </div>
            <div class="modal_user_options">
                <div class="modal_user_options_img">
                    <img src="<?php echo BASE_URL; ?>assets/images/lock.png" alt="">
                </div>
                <p>Bloquear Contato..</p>
            </div>
            <div class="modal_user_options">
                <div class="modal_user_options_img">
                    <img src="<?php echo BASE_URL; ?>assets/images/trash.png" alt="">
                </div>
                <p>Excluir contato..</p>
            </div>
        </div>
    </div>
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
            </div>
        </div>
        <div class="message_bottom">
            <input type="text" placeholder="Envie uma mensagem...">
            <button><img src="assets/images/send_message.png" alt=""></button>
        </div>
    </div>
</section>