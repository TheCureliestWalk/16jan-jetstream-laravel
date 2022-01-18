<!-- Logout Modal-->

<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ยืนยันออกจากระบบ</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">คุณแน่ใจว่าจะออกจากระบบ? เมื่อออกจากระบบแล้ว คุณต้องทำการเข้าสู่ระบบใหม้</div>
            <form action="{{ url('logout') }}" method="POST">
                @csrf
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">กลับ</button>
                    <button type="submit" class="btn btn-danger">ยืนยัน</button>
                </div>
            </form>
        </div>
    </div>
</div>
