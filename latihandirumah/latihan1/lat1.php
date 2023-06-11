                        <?php
                        $no = 1;
                        $produk = mysqli_query($conn, "SELECT * FROM tb_product LEFT JOIN tb_category USING (category_id) ORDER BY product_id DESC");
                        if (mysqli_num_rows($produk) > 0) {
                            while ($row = mysqli_fetch_array($produk)) {
                        ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $row['category_name'] ?></td>
                                    <td><?php echo $row['product_name'] ?></td>
                                    <td>Rp. <?php echo number_format($row['product_price']) ?></td>
                                    <td> <a href="produk/<?php echo $row['product_image'] ?>" target="_blank"> <img src="produk/<?php echo $row['product_image'] ?>" width="50px" height="50px"></a></td>
                                    <td class="status-db"><?php echo ($row['product_status'] == 0) ? 'Tidak Aktif' : 'Aktif'; ?></td>
                                    <td class="aksi-db">
                                        <a href="edit-produk.php?id=<?php echo $row['product_id'] ?>">Edit</a> || <a href="proses-hapus.php?idp=<?php echo $row['product_id'] ?>" onclick="return confirm('yakin mau dihapus?')">Hapus</a>
                                    </td>
                                </tr>
                            <?php }
                        } else { ?>
                            <tr>
                                <td colspan="7">Tidak ada data</td>
                            </tr>
                                
                        <?php } ?>