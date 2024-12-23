<div class="main">
                    <div class="main-category">
                        <div class="main-danhmuc">
                            <p>Người dùng</p>
                            <a href="../html/adminUserAdd.html">+ Thêm người dùng</a>
                        </div>
                        <div class="main-header">
                            <div class="left-main-header">
                                <p>Đã chọn 3 mục</p>
                                <a href="">Xóa</a>
                            </div>
                            <div class="right-main-header">
                                <input type="text" placeholder="Tìm kiếm">
                                <div class="filter"><i class="fa-solid fa-filter"></i></div>
                                <div class="sort"><i class="fa-solid fa-arrow-down-a-z"></i></div>
                            </div>
                        </div>
                    </div>
                    <!-- Body chính (Cứ sửa những cột trong bảng, nếu dư thì cứ xóa, nó tự nhảy) -->
                    <!--không cần phải css thêm -->
                    <div class="main-product">
                        <table>
                            <thead>
                                <tr>
                                    <th><input type="checkbox"></th>
                                    <th>ID</th>
                                    <th>Họ và tên</th>
                                    <th>Email</th>
                                    <th>vai trò</th>
                                    <th>Trạng thái</th>
                                    <th>Sửa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- 1 box -->
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>#1234</td>
                                    <td>Họ và tên</td>
                                    <td>email@gmail.com</td>
                                    <td>Quản trị</td>
                                    <td><span class="status success">Đang hoạt động</span></td>
                                    <td><a href="../html/adminUserEdit.html">Sửa</a></td>
                                </tr>
                                <!-- 1 box -->
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>#1234</td>
                                    <td>Họ và tên</td>
                                    <td>email@gmail.com</td>
                                    <td>Người dùng</td>
                                    <td><span class="status pending">Tạm ngưng</span></td>
                                    <td><a href="../html/adminUserEdit.html">Sửa</a></td>
                                </tr>
                                <!-- 1 box -->
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>#1234</td>
                                    <td>Họ và tên</td>
                                    <td>email@gmail.com</td>
                                    <td>Quản trị</td>
                                    <td><span class="status danger">Đã hủy</span></td>
                                    <td><a href="../html/adminUserEdit.html">Sửa</a></td>
                                </tr>
                                <!-- 1 box -->
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>#1234</td>
                                    <td>Họ và tên</td>
                                    <td>email@gmail.com</td>
                                    <td>Người dùng</td>
                                    <td><span class="status success">Đang hoạt động</span></td>
                                    <td><a href="../html/adminUserEdit.html">Sửa</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- button chuyển trang -->
                    <div class="main-turnpage">
                        <button class="prev">1</button>
                        <button class="next">2</button>
                        <button class="nextpage">></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>