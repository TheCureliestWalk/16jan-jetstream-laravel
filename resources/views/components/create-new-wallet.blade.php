<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">ยินดีต้อนรับ</h6>
    </div>
    <div class="card-body">
        <p>คุณเพิ่งได้ทำการสมัครบัญชีกับทางระบบไว้เรียบร้อย แต่คุณยังไม่ได้สร้างบัญชีเงินฝาก (กระเป๋าตังค์) ดังนั้นคุณต้องสร้างบัญชีเงินฝากก่อนที่จะใช้ระบบได้อย่างเต็มที่</p>
        <div class="d-flex flex-md-row-reverse">
            <form action="{{ route('wallet') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">สร้างกระเป๋าตังค์</button>
            </form>

        </div>
    </div>
</div>
