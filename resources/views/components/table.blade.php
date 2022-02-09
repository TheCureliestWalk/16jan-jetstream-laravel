<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">ตารางข้อมูลสมาชิก</h1>
<p class="mb-4">ข้อมูลและรายละเอียดต่าง ๆ ของสมาชิก</p>

<!-- User Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">สมาชิกทั้งหมด</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0" id="userTable">
                <thead>
                <tr>
                    <th>ลำดับที่</th>
                    <th>ID</th>
                    <th>ชื่อ-สกุล</th>
                    <th>ยอดเงิน</th>
                    <th>ยอดรอโอน</th>
                    <th>อีเมลล์</th>
                    <th>Admin?</th>
                    <th>ล็อค?</th>
                    <th>แบน?</th>
                    <th>สร้างเมื่อ</th>
                </tr>
                </thead>
                <tbody>
                @php
                $no = 1;
                    @endphp
                @foreach($users as $user)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $user->id ?? ''}}</td>
                    <td>{{ $user->name ?? ''}}</td>
                    <td>{{ $user->wallet->balance ?? 'ยังไม่สร้าง'}}</td>
                    <td>{{ $user->wallet->on_hold ?? 'ยังไม่สร้าง'}}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->is_admin ? 'True' : 'False' }}</td>
                    <td>{{ $user->is_lock ? 'True' : 'False'}}</td>
                    <td>{{ $user->is_ban ? 'True' : 'False'}}</td>
                    <td>{{ $user->created_at ?? ''}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
