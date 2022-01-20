<!-- Logout Modal-->

<div class="modal fade show"  id="createNewWalletModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document" >
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">ยินดีต้อนรับ</h5>
                <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">คุณเพิ่งได้ทำการสมัครบัญชีกับทางระบบไว้เรียบร้อย แต่คุณยังไม่ได้สร้างบัญชีเงินฝาก (กระเป๋าตังค์) ดังนั้นคุณต้องสร้างบัญชีเงินฝากก่อนที่จะใช้ระบบได้อย่างเต็มที่</div>
            <form action="{{ route('wallet') }}" method="POST">
                @csrf
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">สร้างกระเป๋าตังค์</button>
                </div>
            </form>
        </div>
    </div>
</div>
