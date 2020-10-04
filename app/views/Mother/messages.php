<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>
<div class="container">
  <br>
  <h3 class=" text-center">Messaging</h3>
  <br>
  <div class="messaging">
    <div class="inbox_msg">
      <div class="inbox_people">
        <div class="headind_srch">
          <div class="recent_heading">
            <h4>Recent</h4>
          </div>
          <div class="srch_bar">
            <div class="stylish-input-group">
              <form action="<?= PROOT ?>mother/searchForMessage" method="POST">
                <input type="text" class="search-bar" name="idcardnum" id="idcardnum" placeholder="Search" value="<?= $this->search_text["idcardnum"] ?>">
                <span class="input-group-addon">
                  <button type="submit"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                </span>
              </form>

            </div>
          </div>
          <div class='alert alert-danger mx-auto' id='notfound' style="display: none;">
            <p>User not found</p>
          </div>
        </div>
        <div class="inbox_chat">
          <?php foreach ($this->chats as $chat) : ?>
            <div class="chat_list active_chat">
              <div class="chat_people">
                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                <div class="chat_ib">
                  <?php if (User::currentUser()->idcardnum == $chat->idcardnum) : ?>
                    <h5><?= $chat->reciver_name ?><span class="chat_date"><?= Helper::time_elapsed_string($chat->date); ?></span></h5>
                    <p><?= $chat->reciver_name ?>: <?= $chat->message ?></p>
                    <div class="text-right" style="width: 100%;"><a href="<?= PROOT ?>mother/message/<?= $chat->sender; ?>">view</a></div>
                  <?php else : ?>
                    <h5><?= $chat->sender_name ?><span class="chat_date"><?= Helper::time_elapsed_string($chat->date); ?></span></h5>
                    <p>You: <?= $chat->message ?></p>
                    <div class="text-right" style="width: 100%;"><a href="<?= PROOT ?>mother/message/<?= $chat->idcardnum; ?>">view</a></div>
                  <?php endif; ?>
                </div>
              </div>

            </div>
          <?php endforeach; ?>
          <?php foreach ($this->users as $user) : ?>
            <div class="chat_list active_chat">
              <div class="chat_people">
                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                <div class="chat_ib">
                  <h5><?= $user->name ?></h5>

                </div>
              </div>
              <a href="<?= PROOT ?>mother/message/<?= $user->idcardnum; ?>">view</a>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="mesgs">
        <div class="msg_history">
          <?php foreach ($this->selectedChat as $chat) : ?>
            <?php if ($chat->sender != User::currentUser()->idcardnum) : ?>
              <div class="incoming_msg">
                <p style="font-size: 15px;" class="mb-2"><?= $chat->name ?></p>
                <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                <div class="received_msg">
                  <div class="received_withd_msg">
                    <p><?= $chat->message ?></p>
                    <span class="time_date"> <?= Date("l jS \of F Y h:i:s A", strtotime($chat->date)); ?></span>
                  </div>
                </div>
              </div>
            <?php else : ?>
              <div class="outgoing_msg">
                <div class="sent_msg">
                  <p><?= $chat->message; ?></p>
                  <span class="time_date"> <?= Date("l jS \of F Y h:i:s A", strtotime($chat->date)); ?></span>
                </div>
              </div>
            <?php endif; ?>

          <?php endforeach; ?>

        </div>
        <div class="type_msg">
          <form action="<?= PROOT ?>mother/message/<?= $this->activeChat; ?>" method="POST">
            <div class="input_msg_write">
              <input type="text" class="write_msg" id='message' name="message" placeholder="Type a message" value="<?= $this->message['message'] ?>" />
              <button class="msg_send_btn" type="submit"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
            </div>
          </form>
        </div>
      </div>
    </div>



  </div>
</div>
<?php $this->end(); ?>