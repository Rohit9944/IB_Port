
@include('ship-owner.include.header')
<!-- Leaflet Map -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"/>

<style>

.chat-container {
    height: 90vh;
}

.chat-list {
    height: 100%;
    overflow-y: auto;
    border-right: 1px solid #ddd;
}

.chat-box {
    height: 100%;
    display: flex;
    flex-direction: column;
}

.chat-messages {
    flex: 1;
    overflow-y: auto;
    padding: 15px;
}

.message {
    max-width: 70%;
    padding: 10px 15px;
    border-radius: 10px;
    margin-bottom: 10px;
}

.sent {
    background: #0d6efd;
    color: white;
    margin-left: auto;
}

.received {
    background: #e9ecef;
}

.chat-input {
    border-top: 1px solid #ddd;
    padding: 10px;
}

.chat-user {
    cursor: pointer;
    padding: 10px;
    border-bottom: 1px solid #eee;
}

.chat-user:hover {
    background: #f1f1f1;
}

.active-chat {
    background: #e7f1ff;
}
</style>


<div class="container-fluid page-body-wrapper">
@include('ship-owner.include.sidebar')
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">Messages</h1>
      </div>
      
    </div>


    
     <div class="row chat-container bg-white shadow rounded">

        <!-- Inbox -->
        <div class="col-md-4 chat-list">

            <div class="p-3 border-bottom">
                <h5>Messages</h5>
                <input type="text" class="form-control" placeholder="Search chat">
            </div>

            <!-- Chat Users -->
            <div class="chat-user active-chat">
                <strong>ABC Logistics</strong><br>
                <small>Last message preview...</small>
            </div>

            <div class="chat-user">
                <strong>Global Shipping</strong><br>
                <small>Hey, about contract...</small>
            </div>

        </div>

        <!-- Chat Window -->
        <div class="col-md-8 chat-box">

            <!-- Header -->
            <div class="p-3 border-bottom d-flex justify-content-between">
                <div>
                    <strong>ABC Logistics</strong><br>
                    <small class="text-success">Online</small>
                </div>
                <div>
                    <button class="btn btn-light btn-sm">📎</button>
                </div>
            </div>

            <!-- Messages -->
            <div class="chat-messages">

                <div class="message received">
                    Hello, is vessel available?
                </div>

                <div class="message sent">
                    Yes, available from 20th March.
                </div>

                <div class="message received">
                    Please share freight details.
                </div>

                <div class="message sent">
                    $25 per ton. Let me know.
                </div>

            </div>

            <!-- Input -->
            <div class="chat-input">

                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Type a message">

                    <!-- File Upload -->
                    <input type="file" class="form-control">

                    <button class="btn btn-primary">Send</button>
                </div>

            </div>

        </div>

    </div>

    </div>

  </div><!-- content-wrapper ends -->
</div><!-- main-panel ends -->

</div>
@include('ship-owner.include.footer')

  