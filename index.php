<!DOCTYPE html>
<html lang="en">
<?php require_once './head.php'?>
<body>
    <div class="wrapper">
    <?php require_once './header.php' ?>
        <div class="body">
            <div class="banner-header">
                <div class="slider">
                    <div class="slider-banner">
                        <div class="left-banner">
                            <div class="left-banner-title">
                                <h4>Only<span>fans</span> Store</h4>
                                <h1>Spring & winter 2023</h1>
                            </div>
                            <div class="left-banner-btn">
                                <button>shop now</button>
                            </div>
                        </div>
                        <img src="./img/slide-header-img/banner-1.png" alt="" class="right-banner">
                    </div>
                    <div class="slider-banner">
                        <div class="left-banner">
                            <div class="left-banner-title">
                                <h4>Only<span>fans</span> Store</h4>
                                <h1>Autum & fall 2023</h1>
                            </div>
                            <div class="left-banner-btn">
                                <button>shop now</button>
                            </div>
                        </div>
                        <img src="./img/slide-header-img/banner-2.png" alt="" class="right-banner">
                    </div>
                    <div class="slider-banner">
                        <div class="left-banner">
                            <div class="left-banner-title">
                                <h4>Only<span>fans</span> Store</h4>
                                <h1>Fall & summer 2023</h1>
                            </div>
                            <div class="left-banner-btn">
                                <button>shop now</button>
                            </div>
                        </div>
                        <img src="./img/slide-header-img/banner-3.png" alt="" class="right-banner">
                    </div>
                </div>
                <div class="slider-btn">
                    <div class="prev-btn">
                        <ion-icon name="chevron-back-outline"></ion-icon>
                    </div>
                    <div class="next-btn">
                        <ion-icon name="chevron-forward-outline"></ion-icon>
                    </div>
                </div>
            </div>
            <div class="body-container-1">
                <div class="left-container">
                    <div class="left-container-img">
                        <img src="./img/banner-body/banner-1.png" alt="">
                    </div>
                    <div class="left-container-btn see-more-btn">
                        <button>Xem thêm</button>
                    </div>
                </div>
                <div class="right-container">
                    <div class="right-container-header">
                        <div class="r-ctn-header-title">Best selling</div>
                        <div class="r-ctn-header-btn">
                            <ion-icon name="chevron-back-outline"></ion-icon>
                            <ion-icon name="chevron-forward-outline"></ion-icon>
                        </div>
                    </div>
                    <div class="r-ctn-products-list">
                        <div class="product-item">
                            <div class="top-product-item">
                                <img class="main-pic" src="./img/img-product/sp-1-1.jpg" alt="">
                                <img class="scale-pic" src="./img/img-product/sp-1-2.jpg" alt="">
                                <div class="sale-title">10%</div>
                                <div class="fav-btn-ctn">
                                    <ion-icon name="heart-outline"></ion-icon>
                                </div>
                                <div class="view-detail-btn">
                                    <div class="view-detail-btn-title">Xem</div>
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>
                                <div class="view-add-cart-btn">
                                    <div class="view-add-cart-btn-title">Thêm</div>
                                    <ion-icon name="cart-outline"></ion-icon>
                                </div>
                                <div class="view-add-cart">
                                    <div class="vac-headline">
                                        <div class="vac-close-btn">
                                            <ion-icon name="close-outline"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="vac-content">
                                        <div class="color-selection">
                                            <div class="color-title">White</div>
                                            <div class="color-content">
                                                <div class="color-type" style="background:brown;" id="Brown">
                                                </div>
                                                <div class="color-type" style="background:black;" id="Black">
                                                </div>
                                                <div class="color-type" style="background:white;" id="White">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="size-selection">
                                            <div class="size-title">M</div>
                                            <div class="size-content">
                                                <div class="size-type" id='M'>M</div>
                                                <div class="size-type" id="L">L</div>
                                                <div class="size-type" id="XL">XL</div>
                                            </div>
                                        </div>
                                        <div class="price-view">
                                            <div class="price-title">Price</div>
                                            <span class="price"></span>
                                        </div>
                                        <div class="quantity-adjust"> <input class="quantity-number" value="1" min="1"
                                                type="text">
                                            <div class="adjust-btn">
                                                <div class="des-btn">
                                                    <ion-icon name="remove-outline"><ion-icon>
                                                </div>
                                                <div class="asc-btn">
                                                    <ion-icon name="add-outline"></ion-icon>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-cart-cate">
                                            <div class="add-cart-btn">
                                                Thêm vào giỏ hàng
                                            </div>
                                        </div>
                                    </div>
                                    <div class="empty-alert-color">Chưa chọn màu</div>
                                    <div class="empty-alert-size">Chưa chọn size</div>
                                </div>
                            </div>
                            <div class="product-item-content">
                                <div class="product-name">Sản phẩm 1</div>
                                <div class="product-info">
                                    <div class="product-price">
                                        <span class="price">150000</span>
                                        <span> VND</span>
                                    </div>
                                    <div class="color-product-list">
                                        <div class="color-type" style="background:brown;">
                                            <div class="color-name">brown
                                            </div>
                                        </div>
                                        <div class="color-type" style="background:black;">
                                            <div class="color-name">black
                                            </div>
                                        </div>
                                        <div class="color-type" style="background:white;">
                                            <div class="color-name">white
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" class="id-product" value="0">
                        </div>
                        <div class="product-item">
                            <div class="top-product-item">
                                <img class="main-pic" src="./img/img-product/sp-2-1.jpg" alt="">
                                <img class="scale-pic" src="./img/img-product/sp-2-2.jpg" alt="">
                                <div class="sale-title">10%</div>
                                <div class="fav-btn-ctn">
                                    <ion-icon name="heart-outline"></ion-icon>
                                </div>
                                <div class="view-detail-btn">
                                    <div class="view-detail-btn-title">Xem</div>
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>
                                <div class="view-add-cart-btn">
                                    <div class="view-add-cart-btn-title">Thêm</div>
                                    <ion-icon name="cart-outline"></ion-icon>
                                </div>
                                <div class="view-add-cart">
                                    <div class="vac-headline">
                                        <div class="vac-close-btn">
                                            <ion-icon name="close-outline"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="vac-content">
                                        <div class="color-selection">
                                            <div class="color-title">White</div>
                                            <div class="color-content">
                                                <div class="color-type" style="background:brown;" id="Brown">
                                                </div>
                                                <div class="color-type" style="background:black;" id="Black">
                                                </div>
                                                <div class="color-type" style="background:white;" id="White">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="size-selection">
                                            <div class="size-title">M</div>
                                            <div class="size-content">
                                                <div class="size-type" id='M'>M</div>
                                                <div class="size-type" id="L">L</div>
                                                <div class="size-type" id="XL">XL</div>
                                            </div>
                                        </div>
                                        <div class="price-view">
                                            <div class="price-title">Price</div>
                                            <span class="price"></span>
                                        </div>
                                        <div class="quantity-adjust"> <input class="quantity-number" value="1" min="1"
                                                type="text">
                                            <div class="adjust-btn">
                                                <div class="des-btn">
                                                    <ion-icon name="remove-outline"><ion-icon>
                                                </div>
                                                <div class="asc-btn">
                                                    <ion-icon name="add-outline"></ion-icon>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-cart-cate">
                                            <div class="add-cart-btn">
                                                Thêm vào giỏ hàng
                                            </div>
                                        </div>
                                    </div>
                                    <div class="empty-alert-color">Chưa chọn màu</div>
                                    <div class="empty-alert-size">Chưa chọn size</div>
                                </div>
                            </div>
                            <div class="product-item-content">
                                <div class="product-name">Sản phẩm 2</div>
                                <div class="product-info">
                                    <div class="product-price">
                                        <span class="price">310000</span>
                                        <span> VND</span>
                                    </div>
                                    <div class="color-product-list">
                                        <div class="color-type" style="background:brown;">
                                            <div class="color-name">brown
                                            </div>
                                        </div>
                                        <div class="color-type" style="background:black;">
                                            <div class="color-name">black
                                            </div>
                                        </div>
                                        <div class="color-type" style="background:white;">
                                            <div class="color-name">white
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" class="id-product" value="1">
                        </div>
                        <div class="product-item">
                            <div class="top-product-item">
                                <img class="main-pic" src="./img/img-product/sp-3-1.jpg" alt="">
                                <img class="scale-pic" src="./img/img-product/sp-3-2.jpg" alt="">
                                <div class="sale-title">10%</div>
                                <div class="fav-btn-ctn">
                                    <ion-icon name="heart-outline"></ion-icon>
                                </div>
                                <div class="view-detail-btn">
                                    <div class="view-detail-btn-title">Xem</div>
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>
                                <div class="view-add-cart-btn">
                                    <div class="view-add-cart-btn-title">Thêm</div>
                                    <ion-icon name="cart-outline"></ion-icon>
                                </div>
                                <div class="view-add-cart">
                                    <div class="vac-headline">
                                        <div class="vac-close-btn">
                                            <ion-icon name="close-outline"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="vac-content">
                                        <div class="color-selection">
                                            <div class="color-title">White</div>
                                            <div class="color-content">
                                                <div class="color-type" style="background:brown;" id="Brown">
                                                </div>
                                                <div class="color-type" style="background:black;" id="Black">
                                                </div>
                                                <div class="color-type" style="background:white;" id="White">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="size-selection">
                                            <div class="size-title">M</div>
                                            <div class="size-content">
                                                <div class="size-type" id='M'>M</div>
                                                <div class="size-type" id="L">L</div>
                                                <div class="size-type" id="XL">XL</div>
                                            </div>
                                        </div>
                                        <div class="price-view">
                                            <div class="price-title">Price</div>
                                            <span class="price"></span>
                                        </div>
                                        <div class="quantity-adjust"> <input class="quantity-number" value="1" min="1"
                                                type="text">
                                            <div class="adjust-btn">
                                                <div class="des-btn">
                                                    <ion-icon name="remove-outline"><ion-icon>
                                                </div>
                                                <div class="asc-btn">
                                                    <ion-icon name="add-outline"></ion-icon>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-cart-cate">
                                            <div class="add-cart-btn">
                                                Thêm vào giỏ hàng
                                            </div>
                                        </div>
                                    </div>
                                    <div class="empty-alert-color">Chưa chọn màu</div>
                                    <div class="empty-alert-size">Chưa chọn size</div>
                                </div>
                            </div>
                            <div class="product-item-content">
                                <div class="product-name">Sản phẩm 3</div>
                                <div class="product-info">
                                    <div class="product-price">
                                        <span class="price">320000</span>
                                        <span> VND</span>
                                    </div>
                                    <div class="color-product-list">
                                        <div class="color-type" style="background:brown;">
                                            <div class="color-name">brown
                                            </div>
                                        </div>
                                        <div class="color-type" style="background:black;">
                                            <div class="color-name">black
                                            </div>
                                        </div>
                                        <div class="color-type" style="background:white;">
                                            <div class="color-name">white
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" class="id-product" value="2">
                        </div>
                        <div class="product-item">
                            <div class="top-product-item">
                                <img class="main-pic" src="./img/img-product/sp-4-1.jpg" alt="">
                                <img class="scale-pic" src="./img/img-product/sp-4-2.jpg" alt="">
                                <div class="sale-title">10%</div>
                                <div class="fav-btn-ctn">
                                    <ion-icon name="heart-outline"></ion-icon>
                                </div>
                                <div class="view-detail-btn">
                                    <div class="view-detail-btn-title">Xem</div>
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>
                                <div class="view-add-cart-btn">
                                    <div class="view-add-cart-btn-title">Thêm</div>
                                    <ion-icon name="cart-outline"></ion-icon>
                                </div>
                                <div class="view-add-cart">
                                    <div class="vac-headline">
                                        <div class="vac-close-btn">
                                            <ion-icon name="close-outline"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="vac-content">
                                        <div class="color-selection">
                                            <div class="color-title">White</div>
                                            <div class="color-content">
                                                <div class="color-type" style="background:brown;" id="Brown">
                                                </div>
                                                <div class="color-type" style="background:black;" id="Black">
                                                </div>
                                                <div class="color-type" style="background:white;" id="White">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="size-selection">
                                            <div class="size-title">M</div>
                                            <div class="size-content">
                                                <div class="size-type" id='M'>M</div>
                                                <div class="size-type" id="L">L</div>
                                                <div class="size-type" id="XL">XL</div>
                                            </div>
                                        </div>
                                        <div class="price-view">
                                            <div class="price-title">Price</div>
                                            <span class="price"></span>
                                        </div>
                                        <div class="quantity-adjust"> <input class="quantity-number" value="1" min="1"
                                                type="text">
                                            <div class="adjust-btn">
                                                <div class="des-btn">
                                                    <ion-icon name="remove-outline"><ion-icon>
                                                </div>
                                                <div class="asc-btn">
                                                    <ion-icon name="add-outline"></ion-icon>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-cart-cate">
                                            <div class="add-cart-btn">
                                                Thêm vào giỏ hàng
                                            </div>
                                        </div>
                                    </div>
                                    <div class="empty-alert-color">Chưa chọn màu</div>
                                    <div class="empty-alert-size">Chưa chọn size</div>
                                </div>
                            </div>
                            <div class="product-item-content">
                                <div class="product-name">Sản phẩm 4</div>
                                <div class="product-info">
                                    <div class="product-price">
                                        <span class="price">210000</span>
                                        <span> VND</span>
                                    </div>
                                    <div class="color-product-list">
                                        <div class="color-type" style="background:brown;">
                                            <div class="color-name">brown
                                            </div>
                                        </div>
                                        <div class="color-type" style="background:black;">
                                            <div class="color-name">black
                                            </div>
                                        </div>
                                        <div class="color-type" style="background:white;">
                                            <div class="color-name">white
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" class="id-product" value="3">
                        </div>
                        <div class="product-item">
                            <div class="top-product-item">
                                <img class="main-pic" src="./img/img-product/sp-5-1.jpg" alt="">
                                <img class="scale-pic" src="./img/img-product/sp-5-2.jpg" alt="">
                                <div class="sale-title">10%</div>
                                <div class="fav-btn-ctn">
                                    <ion-icon name="heart-outline"></ion-icon>
                                </div>
                                <div class="view-detail-btn">
                                    <div class="view-detail-btn-title">Xem</div>
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>
                                <div class="view-add-cart-btn">
                                    <div class="view-add-cart-btn-title">Thêm</div>
                                    <ion-icon name="cart-outline"></ion-icon>
                                </div>
                                <div class="view-add-cart">
                                    <div class="vac-headline">
                                        <div class="vac-close-btn">
                                            <ion-icon name="close-outline"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="vac-content">
                                        <div class="color-selection">
                                            <div class="color-title">White</div>
                                            <div class="color-content">
                                                <div class="color-type" style="background:brown;" id="Brown">
                                                </div>
                                                <div class="color-type" style="background:black;" id="Black">
                                                </div>
                                                <div class="color-type" style="background:white;" id="White">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="size-selection">
                                            <div class="size-title">M</div>
                                            <div class="size-content">
                                                <div class="size-type" id='M'>M</div>
                                                <div class="size-type" id="L">L</div>
                                                <div class="size-type" id="XL">XL</div>
                                            </div>
                                        </div>
                                        <div class="price-view">
                                            <div class="price-title">Price</div>
                                            <span class="price"></span>
                                        </div>
                                        <div class="quantity-adjust"> <input class="quantity-number" value="1" min="1"
                                                type="text">
                                            <div class="adjust-btn">
                                                <div class="des-btn">
                                                    <ion-icon name="remove-outline"><ion-icon>
                                                </div>
                                                <div class="asc-btn">
                                                    <ion-icon name="add-outline"></ion-icon>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-cart-cate">
                                            <div class="add-cart-btn">
                                                Thêm vào giỏ hàng
                                            </div>
                                        </div>
                                    </div>
                                    <div class="empty-alert-color">Chưa chọn màu</div>
                                    <div class="empty-alert-size">Chưa chọn size</div>
                                </div>
                            </div>
                            <div class="product-item-content">
                                <div class="product-name">Sản phẩm 5</div>
                                <div class="product-info">
                                    <div class="product-price">
                                        <span class="price">190000</span>
                                        <span> VND</span>
                                    </div>
                                    <div class="color-product-list">
                                        <div class="color-type" style="background:brown;">
                                            <div class="color-name">brown
                                            </div>
                                        </div>
                                        <div class="color-type" style="background:black;">
                                            <div class="color-name">black
                                            </div>
                                        </div>
                                        <div class="color-type" style="background:white;">
                                            <div class="color-name">white
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" class="id-product" value="4">
                        </div>
                        <div class="product-item">
                            <div class="top-product-item">
                                <img class="main-pic" src="./img/img-product/sp-6-1.jpg" alt="">
                                <img class="scale-pic" src="./img/img-product/sp-6-2.jpg" alt="">
                                <div class="sale-title">10%</div>
                                <div class="fav-btn-ctn">
                                    <ion-icon name="heart-outline"></ion-icon>
                                </div>
                                <div class="view-detail-btn">
                                    <div class="view-detail-btn-title">Xem</div>
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>
                                <div class="view-add-cart-btn">
                                    <div class="view-add-cart-btn-title">Thêm</div>
                                    <ion-icon name="cart-outline"></ion-icon>
                                </div>
                                <div class="view-add-cart">
                                    <div class="vac-headline">
                                        <div class="vac-close-btn">
                                            <ion-icon name="close-outline"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="vac-content">
                                        <div class="color-selection">
                                            <div class="color-title">White</div>
                                            <div class="color-content">
                                                <div class="color-type" style="background:brown;" id="Brown">
                                                </div>
                                                <div class="color-type" style="background:black;" id="Black">
                                                </div>
                                                <div class="color-type" style="background:white;" id="White">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="size-selection">
                                            <div class="size-title">M</div>
                                            <div class="size-content">
                                                <div class="size-type" id='M'>M</div>
                                                <div class="size-type" id="L">L</div>
                                                <div class="size-type" id="XL">XL</div>
                                            </div>
                                        </div>
                                        <div class="price-view">
                                            <div class="price-title">Price</div>
                                            <span class="price"></span>
                                        </div>
                                        <div class="quantity-adjust"> <input class="quantity-number" value="1" min="1"
                                                type="text">
                                            <div class="adjust-btn">
                                                <div class="des-btn">
                                                    <ion-icon name="remove-outline"><ion-icon>
                                                </div>
                                                <div class="asc-btn">
                                                    <ion-icon name="add-outline"></ion-icon>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-cart-cate">
                                            <div class="add-cart-btn">
                                                Thêm vào giỏ hàng
                                            </div>
                                        </div>
                                    </div>
                                    <div class="empty-alert-color">Chưa chọn màu</div>
                                    <div class="empty-alert-size">Chưa chọn size</div>
                                </div>
                            </div>
                            <div class="product-item-content">
                                <div class="product-name">Sản phẩm 6</div>
                                <div class="product-info">
                                    <div class="product-price">
                                        <span class="price">200000</span>
                                        <span> VND</span>
                                    </div>
                                    <div class="color-product-list">
                                        <div class="color-type" style="background:brown;">
                                            <div class="color-name">brown
                                            </div>
                                        </div>
                                        <div class="color-type" style="background:black;">
                                            <div class="color-name">black
                                            </div>
                                        </div>
                                        <div class="color-type" style="background:white;">
                                            <div class="color-name">white
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" class="id-product" value="5">
                        </div>
                    </div>
                    <div class="right-container-footer">
                        <hr width="20%" />
                        <span>Xem thêm</span>
                        <hr width="72.5%" />
                    </div>
                </div>
            </div>
            <div class="body-container-2">
                <div class="body-ctn-header-2">
                    <div class="collection-title title">Collection</div>
                    <div class="collection-banner">
                        <div class="collection-item">
                            <img src="./img/banner-body/banner-2.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="body-ctn-content-2">
                    <div class="new-product-title title">Sản Phẩm Mới</div>
                    <div class="new-product-list">
                        <div class="product-item">
                            <div class="top-product-item">
                                <img class="main-pic" src="./img/img-product/sp-7.jpg" alt="">
                                <img class="scale-pic" src="./img/img-product/sp-7.jpg" alt="">
                                <div class="sale-title">10%</div>
                                <div class="fav-btn-ctn">
                                    <ion-icon name="heart-outline"></ion-icon>
                                </div>
                                <div class="view-detail-btn">
                                    <div class="view-detail-btn-title">Xem</div>
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>
                                <div class="view-add-cart-btn">
                                    <div class="view-add-cart-btn-title">Thêm</div>
                                    <ion-icon name="cart-outline"></ion-icon>
                                </div>
                                <div class="view-add-cart">
                                    <div class="vac-headline">
                                        <div class="vac-close-btn">
                                            <ion-icon name="close-outline"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="vac-content">
                                        <div class="color-selection">
                                            <div class="color-title">White</div>
                                            <div class="color-content">
                                                <div class="color-type" style="background:brown;" id="Brown">
                                                </div>
                                                <div class="color-type" style="background:black;" id="Black">
                                                </div>
                                                <div class="color-type" style="background:white;" id="White">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="size-selection">
                                            <div class="size-title">M</div>
                                            <div class="size-content">
                                                <div class="size-type" id='M'>M</div>
                                                <div class="size-type" id="L">L</div>
                                                <div class="size-type" id="XL">XL</div>
                                            </div>
                                        </div>
                                        <div class="price-view">
                                            <div class="price-title">Price</div>
                                            <span class="price"></span>
                                        </div>
                                        <div class="quantity-adjust"> <input class="quantity-number" value="1" min="1"
                                                type="text">
                                            <div class="adjust-btn">
                                                <div class="des-btn">
                                                    <ion-icon name="remove-outline"><ion-icon>
                                                </div>
                                                <div class="asc-btn">
                                                    <ion-icon name="add-outline"></ion-icon>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-cart-cate">
                                            <div class="add-cart-btn">
                                                Thêm vào giỏ hàng
                                            </div>
                                        </div>
                                    </div>
                                    <div class="empty-alert-color">Chưa chọn màu</div>
                                    <div class="empty-alert-size">Chưa chọn size</div>
                                </div>
                            </div>
                            <div class="product-item-content">
                                <div class="product-name">Sản phẩm 7</div>
                                <div class="product-info">
                                    <div class="product-price">
                                        <span class="price">920000</span>
                                        <span> VND</span>
                                    </div>
                                    <div class="color-product-list">
                                        <div class="color-type" style="background:brown;">
                                            <div class="color-name">brown
                                            </div>
                                        </div>
                                        <div class="color-type" style="background:black;">
                                            <div class="color-name">black
                                            </div>
                                        </div>
                                        <div class="color-type" style="background:white;">
                                            <div class="color-name">white
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" class="id-product" value="6">
                        </div>
                        <div class="product-item">
                            <div class="top-product-item">
                                <img class="main-pic" src="./img/img-product/sp-8.jpg" alt="">
                                <img class="scale-pic" src="./img/img-product/sp-8.jpg" alt="">
                                <div class="sale-title">10%</div>
                                <div class="fav-btn-ctn">
                                    <ion-icon name="heart-outline"></ion-icon>
                                </div>
                                <div class="view-detail-btn">
                                    <div class="view-detail-btn-title">Xem</div>
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>
                                <div class="view-add-cart-btn">
                                    <div class="view-add-cart-btn-title">Thêm</div>
                                    <ion-icon name="cart-outline"></ion-icon>
                                </div>
                                <div class="view-add-cart">
                                    <div class="vac-headline">
                                        <div class="vac-close-btn">
                                            <ion-icon name="close-outline"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="vac-content">
                                        <div class="color-selection">
                                            <div class="color-title">White</div>
                                            <div class="color-content">
                                                <div class="color-type" style="background:brown;" id="Brown">
                                                </div>
                                                <div class="color-type" style="background:black;" id="Black">
                                                </div>
                                                <div class="color-type" style="background:white;" id="White">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="size-selection">
                                            <div class="size-title">M</div>
                                            <div class="size-content">
                                                <div class="size-type" id='M'>M</div>
                                                <div class="size-type" id="L">L</div>
                                                <div class="size-type" id="XL">XL</div>
                                            </div>
                                        </div>
                                        <div class="price-view">
                                            <div class="price-title">Price</div>
                                            <span class="price"></span>
                                        </div>
                                        <div class="quantity-adjust"> <input class="quantity-number" value="1" min="1"
                                                type="text">
                                            <div class="adjust-btn">
                                                <div class="des-btn">
                                                    <ion-icon name="remove-outline"><ion-icon>
                                                </div>
                                                <div class="asc-btn">
                                                    <ion-icon name="add-outline"></ion-icon>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-cart-cate">
                                            <div class="add-cart-btn">
                                                Thêm vào giỏ hàng
                                            </div>
                                        </div>
                                    </div>
                                    <div class="empty-alert-color">Chưa chọn màu</div>
                                    <div class="empty-alert-size">Chưa chọn size</div>
                                </div>
                            </div>
                            <div class="product-item-content">
                                <div class="product-name">Sản phẩm 8</div>
                                <div class="product-info">
                                    <div class="product-price">
                                        <span class="price">410000</span>
                                        <span> VND</span>
                                    </div>
                                    <div class="color-product-list">
                                        <div class="color-type" style="background:brown;">
                                            <div class="color-name">brown
                                            </div>
                                        </div>
                                        <div class="color-type" style="background:black;">
                                            <div class="color-name">black
                                            </div>
                                        </div>
                                        <div class="color-type" style="background:white;">
                                            <div class="color-name">white
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" class="id-product" value="7">
                        </div>
                        <div class="product-item">
                            <div class="top-product-item">
                                <img class="main-pic" src="./img/img-product/sp-9.jpg" alt="">
                                <img class="scale-pic" src="./img/img-product/sp-9.jpg" alt="">
                                <div class="sale-title">10%</div>
                                <div class="fav-btn-ctn">
                                    <ion-icon name="heart-outline"></ion-icon>
                                </div>
                                <div class="view-detail-btn">
                                    <div class="view-detail-btn-title">Xem</div>
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>
                                <div class="view-add-cart-btn">
                                    <div class="view-add-cart-btn-title">Thêm</div>
                                    <ion-icon name="cart-outline"></ion-icon>
                                </div>
                                <div class="view-add-cart">
                                    <div class="vac-headline">
                                        <div class="vac-close-btn">
                                            <ion-icon name="close-outline"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="vac-content">
                                        <div class="color-selection">
                                            <div class="color-title">White</div>
                                            <div class="color-content">
                                                <div class="color-type" style="background:brown;" id="Brown">
                                                </div>
                                                <div class="color-type" style="background:black;" id="Black">
                                                </div>
                                                <div class="color-type" style="background:white;" id="White">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="size-selection">
                                            <div class="size-title">M</div>
                                            <div class="size-content">
                                                <div class="size-type" id='M'>M</div>
                                                <div class="size-type" id="L">L</div>
                                                <div class="size-type" id="XL">XL</div>
                                            </div>
                                        </div>
                                        <div class="price-view">
                                            <div class="price-title">Price</div>
                                            <span class="price"></span>
                                        </div>
                                        <div class="quantity-adjust"> <input class="quantity-number" value="1" min="1"
                                                type="text">
                                            <div class="adjust-btn">
                                                <div class="des-btn">
                                                    <ion-icon name="remove-outline"><ion-icon>
                                                </div>
                                                <div class="asc-btn">
                                                    <ion-icon name="add-outline"></ion-icon>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-cart-cate">
                                            <div class="add-cart-btn">
                                                Thêm vào giỏ hàng
                                            </div>
                                        </div>
                                    </div>
                                    <div class="empty-alert-color">Chưa chọn màu</div>
                                    <div class="empty-alert-size">Chưa chọn size</div>
                                </div>
                            </div>
                            <div class="product-item-content">
                                <div class="product-name">Sản phẩm 9</div>
                                <div class="product-info">
                                    <div class="product-price">
                                        <span class="price">390000</span>
                                        <span> VND</span>
                                    </div>
                                    <div class="color-product-list">
                                        <div class="color-type" style="background:brown;">
                                            <div class="color-name">brown
                                            </div>
                                        </div>
                                        <div class="color-type" style="background:black;">
                                            <div class="color-name">black
                                            </div>
                                        </div>
                                        <div class="color-type" style="background:white;">
                                            <div class="color-name">white
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" class="id-product" value="8">
                        </div>
                        <div class="product-item">
                            <div class="top-product-item">
                                <img class="main-pic" src="./img/img-product/sp-10.jpg" alt="">
                                <img class="scale-pic" src="./img/img-product/sp-10.jpg" alt="">
                                <div class="sale-title">10%</div>
                                <div class="fav-btn-ctn">
                                    <ion-icon name="heart-outline"></ion-icon>
                                </div>
                                <div class="view-detail-btn">
                                    <div class="view-detail-btn-title">Xem</div>
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>
                                <div class="view-add-cart-btn">
                                    <div class="view-add-cart-btn-title">Thêm</div>
                                    <ion-icon name="cart-outline"></ion-icon>
                                </div>
                                <div class="view-add-cart">
                                    <div class="vac-headline">
                                        <div class="vac-close-btn">
                                            <ion-icon name="close-outline"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="vac-content">
                                        <div class="color-selection">
                                            <div class="color-title">White</div>
                                            <div class="color-content">
                                                <div class="color-type" style="background:brown;" id="Brown">
                                                </div>
                                                <div class="color-type" style="background:black;" id="Black">
                                                </div>
                                                <div class="color-type" style="background:white;" id="White">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="size-selection">
                                            <div class="size-title">M</div>
                                            <div class="size-content">
                                                <div class="size-type" id='M'>M</div>
                                                <div class="size-type" id="L">L</div>
                                                <div class="size-type" id="XL">XL</div>
                                            </div>
                                        </div>
                                        <div class="price-view">
                                            <div class="price-title">Price</div>
                                            <span class="price"></span>
                                        </div>
                                        <div class="quantity-adjust"> <input class="quantity-number" value="1" min="1"
                                                type="text">
                                            <div class="adjust-btn">
                                                <div class="des-btn">
                                                    <ion-icon name="remove-outline"><ion-icon>
                                                </div>
                                                <div class="asc-btn">
                                                    <ion-icon name="add-outline"></ion-icon>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-cart-cate">
                                            <div class="add-cart-btn">
                                                Thêm vào giỏ hàng
                                            </div>
                                        </div>
                                    </div>
                                    <div class="empty-alert-color">Chưa chọn màu</div>
                                    <div class="empty-alert-size">Chưa chọn size</div>
                                </div>
                            </div>
                            <div class="product-item-content">
                                <div class="product-name">Sản phẩm 10</div>
                                <div class="product-info">
                                    <div class="product-price">
                                        <span class="price">270000</span>
                                        <span> VND</span>
                                    </div>
                                    <div class="color-product-list">
                                        <div class="color-type" style="background:brown;">
                                            <div class="color-name">brown
                                            </div>
                                        </div>
                                        <div class="color-type" style="background:black;">
                                            <div class="color-name">black
                                            </div>
                                        </div>
                                        <div class="color-type" style="background:white;">
                                            <div class="color-name">white
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" class="id-product" value="9">
                        </div>
                        <div class="product-item">
                            <div class="top-product-item">
                                <img class="main-pic" src="./img/img-product/sp-11.jpg" alt="">
                                <img class="scale-pic" src="./img/img-product/sp-11.jpg" alt="">
                                <div class="sale-title">10%</div>
                                <div class="fav-btn-ctn">
                                    <ion-icon name="heart-outline"></ion-icon>
                                </div>
                                <div class="view-detail-btn">
                                    <div class="view-detail-btn-title">Xem</div>
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>
                                <div class="view-add-cart-btn">
                                    <div class="view-add-cart-btn-title">Thêm</div>
                                    <ion-icon name="cart-outline"></ion-icon>
                                </div>
                                <div class="view-add-cart">
                                    <div class="vac-headline">
                                        <div class="vac-close-btn">
                                            <ion-icon name="close-outline"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="vac-content">
                                        <div class="color-selection">
                                            <div class="color-title">White</div>
                                            <div class="color-content">
                                                <div class="color-type" style="background:brown;" id="Brown">
                                                </div>
                                                <div class="color-type" style="background:black;" id="Black">
                                                </div>
                                                <div class="color-type" style="background:white;" id="White">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="size-selection">
                                            <div class="size-title">M</div>
                                            <div class="size-content">
                                                <div class="size-type" id='M'>M</div>
                                                <div class="size-type" id="L">L</div>
                                                <div class="size-type" id="XL">XL</div>
                                            </div>
                                        </div>
                                        <div class="price-view">
                                            <div class="price-title">Price</div>
                                            <span class="price"></span>
                                        </div>
                                        <div class="quantity-adjust"> <input class="quantity-number" value="1" min="1"
                                                type="text">
                                            <div class="adjust-btn">
                                                <div class="des-btn">
                                                    <ion-icon name="remove-outline"><ion-icon>
                                                </div>
                                                <div class="asc-btn">
                                                    <ion-icon name="add-outline"></ion-icon>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-cart-cate">
                                            <div class="add-cart-btn">
                                                Thêm vào giỏ hàng
                                            </div>
                                        </div>
                                    </div>
                                    <div class="empty-alert-color">Chưa chọn màu</div>
                                    <div class="empty-alert-size">Chưa chọn size</div>
                                </div>
                            </div>
                            <div class="product-item-content">
                                <div class="product-name">Sản phẩm 11</div>
                                <div class="product-info">
                                    <div class="product-price">
                                        <span class="price">110000</span>
                                        <span> VND</span>
                                    </div>
                                    <div class="color-product-list">
                                        <div class="color-type" style="background:brown;">
                                            <div class="color-name">brown
                                            </div>
                                        </div>
                                        <div class="color-type" style="background:black;">
                                            <div class="color-name">black
                                            </div>
                                        </div>
                                        <div class="color-type" style="background:white;">
                                            <div class="color-name">white
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" class="id-product" value="10">
                        </div>
                        <div class="product-item">
                            <div class="top-product-item">
                                <img class="main-pic" src="./img/img-product/sp-12.jpg" alt="">
                                <img class="scale-pic" src="./img/img-product/sp-12.jpg" alt="">
                                <div class="sale-title">10%</div>
                                <div class="fav-btn-ctn">
                                    <ion-icon name="heart-outline"></ion-icon>
                                </div>
                                <div class="view-detail-btn">
                                    <div class="view-detail-btn-title">Xem</div>
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>
                                <div class="view-add-cart-btn">
                                    <div class="view-add-cart-btn-title">Thêm</div>
                                    <ion-icon name="cart-outline"></ion-icon>
                                </div>
                                <div class="view-add-cart">
                                    <div class="vac-headline">
                                        <div class="vac-close-btn">
                                            <ion-icon name="close-outline"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="vac-content">
                                        <div class="color-selection">
                                            <div class="color-title">White</div>
                                            <div class="color-content">
                                                <div class="color-type" style="background:brown;" id="Brown">
                                                </div>
                                                <div class="color-type" style="background:black;" id="Black">
                                                </div>
                                                <div class="color-type" style="background:white;" id="White">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="size-selection">
                                            <div class="size-title">M</div>
                                            <div class="size-content">
                                                <div class="size-type" id='M'>M</div>
                                                <div class="size-type" id="L">L</div>
                                                <div class="size-type" id="XL">XL</div>
                                            </div>
                                        </div>
                                        <div class="price-view">
                                            <div class="price-title">Price</div>
                                            <span class="price"></span>
                                        </div>
                                        <div class="quantity-adjust"> <input class="quantity-number" value="1" min="1"
                                                type="text">
                                            <div class="adjust-btn">
                                                <div class="des-btn">
                                                    <ion-icon name="remove-outline"><ion-icon>
                                                </div>
                                                <div class="asc-btn">
                                                    <ion-icon name="add-outline"></ion-icon>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-cart-cate">
                                            <div class="add-cart-btn">
                                                Thêm vào giỏ hàng
                                            </div>
                                        </div>
                                    </div>
                                    <div class="empty-alert-color">Chưa chọn màu</div>
                                    <div class="empty-alert-size">Chưa chọn size</div>
                                </div>
                            </div>
                            <div class="product-item-content">
                                <div class="product-name">Sản phẩm 12</div>
                                <div class="product-info">
                                    <div class="product-price">
                                        <span class="price">240000</span>
                                        <span> VND</span>
                                    </div>
                                    <div class="color-product-list">
                                        <div class="color-type" style="background:brown;">
                                            <div class="color-name">brown
                                            </div>
                                        </div>
                                        <div class="color-type" style="background:black;">
                                            <div class="color-name">black
                                            </div>
                                        </div>
                                        <div class="color-type" style="background:white;">
                                            <div class="color-name">white
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" class="id-product" value="11">
                        </div>
                        <div class="product-item">
                            <div class="top-product-item">
                                <img class="main-pic" src="./img/img-product/sp-13.jpg" alt="">
                                <img class="scale-pic" src="./img/img-product/sp-13.jpg" alt="">
                                <div class="sale-title">10%</div>
                                <div class="fav-btn-ctn">
                                    <ion-icon name="heart-outline"></ion-icon>
                                </div>
                                <div class="view-detail-btn">
                                    <div class="view-detail-btn-title">Xem</div>
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>
                                <div class="view-add-cart-btn">
                                    <div class="view-add-cart-btn-title">Thêm</div>
                                    <ion-icon name="cart-outline"></ion-icon>
                                </div>
                                <div class="view-add-cart">
                                    <div class="vac-headline">
                                        <div class="vac-close-btn">
                                            <ion-icon name="close-outline"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="vac-content">
                                        <div class="color-selection">
                                            <div class="color-title">White</div>
                                            <div class="color-content">
                                                <div class="color-type" style="background:brown;" id="Brown">
                                                </div>
                                                <div class="color-type" style="background:black;" id="Black">
                                                </div>
                                                <div class="color-type" style="background:white;" id="White">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="size-selection">
                                            <div class="size-title">M</div>
                                            <div class="size-content">
                                                <div class="size-type" id='M'>M</div>
                                                <div class="size-type" id="L">L</div>
                                                <div class="size-type" id="XL">XL</div>
                                            </div>
                                        </div>
                                        <div class="price-view">
                                            <div class="price-title">Price</div>
                                            <span class="price"></span>
                                        </div>
                                        <div class="quantity-adjust"> <input class="quantity-number" value="1" min="1"
                                                type="text">
                                            <div class="adjust-btn">
                                                <div class="des-btn">
                                                    <ion-icon name="remove-outline"><ion-icon>
                                                </div>
                                                <div class="asc-btn">
                                                    <ion-icon name="add-outline"></ion-icon>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-cart-cate">
                                            <div class="add-cart-btn">
                                                Thêm vào giỏ hàng
                                            </div>
                                        </div>
                                    </div>
                                    <div class="empty-alert-color">Chưa chọn màu</div>
                                    <div class="empty-alert-size">Chưa chọn size</div>
                                </div>
                            </div>
                            <div class="product-item-content">
                                <div class="product-name">Sản phẩm 13</div>
                                <div class="product-info">
                                    <div class="product-price">
                                        <span class="price">450000</span>
                                        <span> VND</span>
                                    </div>
                                    <div class="color-product-list">
                                        <div class="color-type" style="background:brown;">
                                            <div class="color-name">brown
                                            </div>
                                        </div>
                                        <div class="color-type" style="background:black;">
                                            <div class="color-name">black
                                            </div>
                                        </div>
                                        <div class="color-type" style="background:white;">
                                            <div class="color-name">white
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" class="id-product" value="12">
                        </div>
                        <div class="product-item">
                            <div class="top-product-item">
                                <img class="main-pic" src="./img/img-product/sp-14.jpg" alt="">
                                <img class="scale-pic" src="./img/img-product/sp-14.jpg" alt="">
                                <div class="sale-title">10%</div>
                                <div class="fav-btn-ctn">
                                    <ion-icon name="heart-outline"></ion-icon>
                                </div>
                                <div class="view-detail-btn">
                                    <div class="view-detail-btn-title">Xem</div>
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>
                                <div class="view-add-cart-btn">
                                    <div class="view-add-cart-btn-title">Thêm</div>
                                    <ion-icon name="cart-outline"></ion-icon>
                                </div>
                                <div class="view-add-cart">
                                    <div class="vac-headline">
                                        <div class="vac-close-btn">
                                            <ion-icon name="close-outline"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="vac-content">
                                        <div class="color-selection">
                                            <div class="color-title">White</div>
                                            <div class="color-content">
                                                <div class="color-type" style="background:brown;" id="Brown">
                                                </div>
                                                <div class="color-type" style="background:black;" id="Black">
                                                </div>
                                                <div class="color-type" style="background:white;" id="White">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="size-selection">
                                            <div class="size-title">M</div>
                                            <div class="size-content">
                                                <div class="size-type" id='M'>M</div>
                                                <div class="size-type" id="L">L</div>
                                                <div class="size-type" id="XL">XL</div>
                                            </div>
                                        </div>
                                        <div class="price-view">
                                            <div class="price-title">Price</div>
                                            <span class="price"></span>
                                        </div>
                                        <div class="quantity-adjust"> <input class="quantity-number" value="1" min="1"
                                                type="text">
                                            <div class="adjust-btn">
                                                <div class="des-btn">
                                                    <ion-icon name="remove-outline"><ion-icon>
                                                </div>
                                                <div class="asc-btn">
                                                    <ion-icon name="add-outline"></ion-icon>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-cart-cate">
                                            <div class="add-cart-btn">
                                                Thêm vào giỏ hàng
                                            </div>
                                        </div>
                                    </div>
                                    <div class="empty-alert-color">Chưa chọn màu</div>
                                    <div class="empty-alert-size">Chưa chọn size</div>
                                </div>
                            </div>
                            <div class="product-item-content">
                                <div class="product-name">Sản phẩm 14</div>
                                <div class="product-info">
                                    <div class="product-price">
                                        <span class="price">220000</span>
                                        <span> VND</span>
                                    </div>
                                    <div class="color-product-list">
                                        <div class="color-type" style="background:brown;">
                                            <div class="color-name">brown
                                            </div>
                                        </div>
                                        <div class="color-type" style="background:black;">
                                            <div class="color-name">black
                                            </div>
                                        </div>
                                        <div class="color-type" style="background:white;">
                                            <div class="color-name">white
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" class="id-product" value="13">
                        </div>
                        <div class="product-item">
                            <div class="top-product-item">
                                <img class="main-pic" src="./img/img-product/sp-15.jpg" alt="">
                                <img class="scale-pic" src="./img/img-product/sp-15.jpg" alt="">
                                <div class="sale-title">10%</div>
                                <div class="fav-btn-ctn">
                                    <ion-icon name="heart-outline"></ion-icon>
                                </div>
                                <div class="view-detail-btn">
                                    <div class="view-detail-btn-title">Xem</div>
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>
                                <div class="view-add-cart-btn">
                                    <div class="view-add-cart-btn-title">Thêm</div>
                                    <ion-icon name="cart-outline"></ion-icon>
                                </div>
                                <div class="view-add-cart">
                                    <div class="vac-headline">
                                        <div class="vac-close-btn">
                                            <ion-icon name="close-outline"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="vac-content">
                                        <div class="color-selection">
                                            <div class="color-title">White</div>
                                            <div class="color-content">
                                                <div class="color-type" style="background:brown;" id="Brown">
                                                </div>
                                                <div class="color-type" style="background:black;" id="Black">
                                                </div>
                                                <div class="color-type" style="background:white;" id="White">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="size-selection">
                                            <div class="size-title">M</div>
                                            <div class="size-content">
                                                <div class="size-type" id='M'>M</div>
                                                <div class="size-type" id="L">L</div>
                                                <div class="size-type" id="XL">XL</div>
                                            </div>
                                        </div>
                                        <div class="price-view">
                                            <div class="price-title">Price</div>
                                            <span class="price"></span>
                                        </div>
                                        <div class="quantity-adjust"> <input class="quantity-number" value="1" min="1"
                                                type="text">
                                            <div class="adjust-btn">
                                                <div class="des-btn">
                                                    <ion-icon name="remove-outline"><ion-icon>
                                                </div>
                                                <div class="asc-btn">
                                                    <ion-icon name="add-outline"></ion-icon>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-cart-cate">
                                            <div class="add-cart-btn">
                                                Thêm vào giỏ hàng
                                            </div>
                                        </div>
                                    </div>
                                    <div class="empty-alert-color">Chưa chọn màu</div>
                                    <div class="empty-alert-size">Chưa chọn size</div>
                                </div>
                            </div>
                            <div class="product-item-content">
                                <div class="product-name">Sản phẩm 15</div>
                                <div class="product-info">
                                    <div class="product-price">
                                        <span class="price">820000</span>
                                        <span> VND</span>
                                    </div>
                                    <div class="color-product-list">
                                        <div class="color-type" style="background:brown;">
                                            <div class="color-name">brown
                                            </div>
                                        </div>
                                        <div class="color-type" style="background:black;">
                                            <div class="color-name">black
                                            </div>
                                        </div>
                                        <div class="color-type" style="background:white;">
                                            <div class="color-name">white
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" class="id-product" value="14">
                        </div>
                        <div class="product-item">
                            <div class="top-product-item">
                                <img class="main-pic" src="./img/img-product/sp-16.jpg" alt="">
                                <img class="scale-pic" src="./img/img-product/sp-16.jpg" alt="">
                                <div class="sale-title">10%</div>
                                <div class="fav-btn-ctn">
                                    <ion-icon name="heart-outline"></ion-icon>
                                </div>
                                <div class="view-detail-btn">
                                    <div class="view-detail-btn-title">Xem</div>
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>
                                <div class="view-add-cart-btn">
                                    <div class="view-add-cart-btn-title">Thêm</div>
                                    <ion-icon name="cart-outline"></ion-icon>
                                </div>
                                <div class="view-add-cart">
                                    <div class="vac-headline">
                                        <div class="vac-close-btn">
                                            <ion-icon name="close-outline"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="vac-content">
                                        <div class="color-selection">
                                            <div class="color-title">White</div>
                                            <div class="color-content">
                                                <div class="color-type" style="background:brown;" id="Brown">
                                                </div>
                                                <div class="color-type" style="background:black;" id="Black">
                                                </div>
                                                <div class="color-type" style="background:white;" id="White">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="size-selection">
                                            <div class="size-title">M</div>
                                            <div class="size-content">
                                                <div class="size-type" id='M'>M</div>
                                                <div class="size-type" id="L">L</div>
                                                <div class="size-type" id="XL">XL</div>
                                            </div>
                                        </div>
                                        <div class="price-view">
                                            <div class="price-title">Price</div>
                                            <span class="price"></span>
                                        </div>
                                        <div class="quantity-adjust"> <input class="quantity-number" value="1" min="1"
                                                type="text">
                                            <div class="adjust-btn">
                                                <div class="des-btn">
                                                    <ion-icon name="remove-outline"><ion-icon>
                                                </div>
                                                <div class="asc-btn">
                                                    <ion-icon name="add-outline"></ion-icon>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-cart-cate">
                                            <div class="add-cart-btn">
                                                Thêm vào giỏ hàng
                                            </div>
                                        </div>
                                    </div>
                                    <div class="empty-alert-color">Chưa chọn màu</div>
                                    <div class="empty-alert-size">Chưa chọn size</div>
                                </div>
                            </div>
                            <div class="product-item-content">
                                <div class="product-name">Sản phẩm 16</div>
                                <div class="product-info">
                                    <div class="product-price">
                                        <span class="price">320000</span>
                                        <span> VND</span>
                                    </div>
                                    <div class="color-product-list">
                                        <div class="color-type" style="background:brown;">
                                            <div class="color-name">brown
                                            </div>
                                        </div>
                                        <div class="color-type" style="background:black;">
                                            <div class="color-name">black
                                            </div>
                                        </div>
                                        <div class="color-type" style="background:white;">
                                            <div class="color-name">white
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" class="id-product" value="15">
                        </div>
                        <div class="product-item">
                            <div class="top-product-item">
                                <img class="main-pic" src="./img/img-product/sp-17.jpg" alt="">
                                <img class="scale-pic" src="./img/img-product/sp-17.jpg" alt="">
                                <div class="sale-title">10%</div>
                                <div class="fav-btn-ctn">
                                    <ion-icon name="heart-outline"></ion-icon>
                                </div>
                                <div class="view-detail-btn">
                                    <div class="view-detail-btn-title">Xem</div>
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>
                                <div class="view-add-cart-btn">
                                    <div class="view-add-cart-btn-title">Thêm</div>
                                    <ion-icon name="cart-outline"></ion-icon>
                                </div>
                                <div class="view-add-cart">
                                    <div class="vac-headline">
                                        <div class="vac-close-btn">
                                            <ion-icon name="close-outline"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="vac-content">
                                        <div class="color-selection">
                                            <div class="color-title">White</div>
                                            <div class="color-content">
                                                <div class="color-type" style="background:brown;" id="Brown">
                                                </div>
                                                <div class="color-type" style="background:black;" id="Black">
                                                </div>
                                                <div class="color-type" style="background:white;" id="White">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="size-selection">
                                            <div class="size-title">M</div>
                                            <div class="size-content">
                                                <div class="size-type" id='M'>M</div>
                                                <div class="size-type" id="L">L</div>
                                                <div class="size-type" id="XL">XL</div>
                                            </div>
                                        </div>
                                        <div class="price-view">
                                            <div class="price-title">Price</div>
                                            <span class="price"></span>
                                        </div>
                                        <div class="quantity-adjust"> <input class="quantity-number" value="1" min="1"
                                                type="text">
                                            <div class="adjust-btn">
                                                <div class="des-btn">
                                                    <ion-icon name="remove-outline"><ion-icon>
                                                </div>
                                                <div class="asc-btn">
                                                    <ion-icon name="add-outline"></ion-icon>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-cart-cate">
                                            <div class="add-cart-btn">
                                                Thêm vào giỏ hàng
                                            </div>
                                        </div>
                                    </div>
                                    <div class="empty-alert-color">Chưa chọn màu</div>
                                    <div class="empty-alert-size">Chưa chọn size</div>
                                </div>
                            </div>
                            <div class="product-item-content">
                                <div class="product-name">Sản phẩm 17</div>
                                <div class="product-info">
                                    <div class="product-price">
                                        <span class="price">620000</span>
                                        <span> VND</span>
                                    </div>
                                    <div class="color-product-list">
                                        <div class="color-type" style="background:brown;">
                                            <div class="color-name">brown
                                            </div>
                                        </div>
                                        <div class="color-type" style="background:black;">
                                            <div class="color-name">black
                                            </div>
                                        </div>
                                        <div class="color-type" style="background:white;">
                                            <div class="color-name">white
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" class="id-product" value="6">
                        </div>
                        <div class="product-item">
                            <div class="top-product-item">
                                <img class="main-pic" src="./img/img-product/sp-18.jpg" alt="">
                                <img class="scale-pic" src="./img/img-product/sp-18.jpg" alt="">
                                <div class="sale-title">10%</div>
                                <div class="fav-btn-ctn">
                                    <ion-icon name="heart-outline"></ion-icon>
                                </div>
                                <div class="view-detail-btn">
                                    <div class="view-detail-btn-title">Xem</div>
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>
                                <div class="view-add-cart-btn">
                                    <div class="view-add-cart-btn-title">Thêm</div>
                                    <ion-icon name="cart-outline"></ion-icon>
                                </div>
                                <div class="view-add-cart">
                                    <div class="vac-headline">
                                        <div class="vac-close-btn">
                                            <ion-icon name="close-outline"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="vac-content">
                                        <div class="color-selection">
                                            <div class="color-title">White</div>
                                            <div class="color-content">
                                                <div class="color-type" style="background:brown;" id="Brown">
                                                </div>
                                                <div class="color-type" style="background:black;" id="Black">
                                                </div>
                                                <div class="color-type" style="background:white;" id="White">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="size-selection">
                                            <div class="size-title">M</div>
                                            <div class="size-content">
                                                <div class="size-type" id='M'>M</div>
                                                <div class="size-type" id="L">L</div>
                                                <div class="size-type" id="XL">XL</div>
                                            </div>
                                        </div>
                                        <div class="price-view">
                                            <div class="price-title">Price</div>
                                            <span class="price"></span>
                                        </div>
                                        <div class="quantity-adjust"> <input class="quantity-number" value="1" min="1"
                                                type="text">
                                            <div class="adjust-btn">
                                                <div class="des-btn">
                                                    <ion-icon name="remove-outline"><ion-icon>
                                                </div>
                                                <div class="asc-btn">
                                                    <ion-icon name="add-outline"></ion-icon>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-cart-cate">
                                            <div class="add-cart-btn">
                                                Thêm vào giỏ hàng
                                            </div>
                                        </div>
                                    </div>
                                    <div class="empty-alert-color">Chưa chọn màu</div>
                                    <div class="empty-alert-size">Chưa chọn size</div>
                                </div>
                            </div>
                            <div class="product-item-content">
                                <div class="product-name">Sản phẩm 18</div>
                                <div class="product-info">
                                    <div class="product-price">
                                        <span class="price">520000</span>
                                        <span> VND</span>
                                    </div>
                                    <div class="color-product-list">
                                        <div class="color-type" style="background:brown;">
                                            <div class="color-name">brown
                                            </div>
                                        </div>
                                        <div class="color-type" style="background:black;">
                                            <div class="color-name">black
                                            </div>
                                        </div>
                                        <div class="color-type" style="background:white;">
                                            <div class="color-name">white
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" class="id-product" value="17">
                        </div>
                        <div class="product-item">
                            <div class="top-product-item">
                                <img class="main-pic" src="./img/img-product/sp-19.jpg" alt="">
                                <img class="scale-pic" src="./img/img-product/sp-19.jpg" alt="">
                                <div class="sale-title">10%</div>
                                <div class="fav-btn-ctn">
                                    <ion-icon name="heart-outline"></ion-icon>
                                </div>
                                <div class="view-detail-btn">
                                    <div class="view-detail-btn-title">Xem</div>
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>
                                <div class="view-add-cart-btn">
                                    <div class="view-add-cart-btn-title">Thêm</div>
                                    <ion-icon name="cart-outline"></ion-icon>
                                </div>
                                <div class="view-add-cart">
                                    <div class="vac-headline">
                                        <div class="vac-close-btn">
                                            <ion-icon name="close-outline"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="vac-content">
                                        <div class="color-selection">
                                            <div class="color-title">White</div>
                                            <div class="color-content">
                                                <div class="color-type" style="background:brown;" id="Brown">
                                                </div>
                                                <div class="color-type" style="background:black;" id="Black">
                                                </div>
                                                <div class="color-type" style="background:white;" id="White">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="size-selection">
                                            <div class="size-title">M</div>
                                            <div class="size-content">
                                                <div class="size-type" id='M'>M</div>
                                                <div class="size-type" id="L">L</div>
                                                <div class="size-type" id="XL">XL</div>
                                            </div>
                                        </div>
                                        <div class="price-view">
                                            <div class="price-title">Price</div>
                                            <span class="price"></span>
                                        </div>
                                        <div class="quantity-adjust"> <input class="quantity-number" value="1" min="1"
                                                type="text">
                                            <div class="adjust-btn">
                                                <div class="des-btn">
                                                    <ion-icon name="remove-outline"><ion-icon>
                                                </div>
                                                <div class="asc-btn">
                                                    <ion-icon name="add-outline"></ion-icon>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-cart-cate">
                                            <div class="add-cart-btn">
                                                Thêm vào giỏ hàng
                                            </div>
                                        </div>
                                    </div>
                                    <div class="empty-alert-color">Chưa chọn màu</div>
                                    <div class="empty-alert-size">Chưa chọn size</div>
                                </div>
                            </div>
                            <div class="product-item-content">
                                <div class="product-name">Sản phẩm 19</div>
                                <div class="product-info">
                                    <div class="product-price">
                                        <span class="price">220000</span>
                                        <span> VND</span>
                                    </div>
                                    <div class="color-product-list">
                                        <div class="color-type" style="background:brown;">
                                            <div class="color-name">brown
                                            </div>
                                        </div>
                                        <div class="color-type" style="background:black;">
                                            <div class="color-name">black
                                            </div>
                                        </div>
                                        <div class="color-type" style="background:white;">
                                            <div class="color-name">white
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" class="id-product" value="18">
                        </div>
                        <div class="product-item">
                            <div class="top-product-item">
                                <img class="main-pic" src="./img/img-product/sp-20.jpg" alt="">
                                <img class="scale-pic" src="./img/img-product/sp-20.jpg" alt="">
                                <div class="sale-title">10%</div>
                                <div class="fav-btn-ctn">
                                    <ion-icon name="heart-outline"></ion-icon>
                                </div>
                                <div class="view-detail-btn">
                                    <div class="view-detail-btn-title">Xem</div>
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>
                                <div class="view-add-cart-btn">
                                    <div class="view-add-cart-btn-title">Thêm</div>
                                    <ion-icon name="cart-outline"></ion-icon>
                                </div>
                                <div class="view-add-cart">
                                    <div class="vac-headline">
                                        <div class="vac-close-btn">
                                            <ion-icon name="close-outline"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="vac-content">
                                        <div class="color-selection">
                                            <div class="color-title">White</div>
                                            <div class="color-content">
                                                <div class="color-type" style="background:brown;" id="Brown">
                                                </div>
                                                <div class="color-type" style="background:black;" id="Black">
                                                </div>
                                                <div class="color-type" style="background:white;" id="White">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="size-selection">
                                            <div class="size-title">M</div>
                                            <div class="size-content">
                                                <div class="size-type" id='M'>M</div>
                                                <div class="size-type" id="L">L</div>
                                                <div class="size-type" id="XL">XL</div>
                                            </div>
                                        </div>
                                        <div class="price-view">
                                            <div class="price-title">Price</div>
                                            <span class="price"></span>
                                        </div>
                                        <div class="quantity-adjust"> <input class="quantity-number" value="1" min="1"
                                                type="text">
                                            <div class="adjust-btn">
                                                <div class="des-btn">
                                                    <ion-icon name="remove-outline"><ion-icon>
                                                </div>
                                                <div class="asc-btn">
                                                    <ion-icon name="add-outline"></ion-icon>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-cart-cate">
                                            <div class="add-cart-btn">
                                                Thêm vào giỏ hàng
                                            </div>
                                        </div>
                                    </div>
                                    <div class="empty-alert-color">Chưa chọn màu</div>
                                    <div class="empty-alert-size">Chưa chọn size</div>
                                </div>
                            </div>
                            <div class="product-item-content">
                                <div class="product-name">Sản phẩm 20</div>
                                <div class="product-info">
                                    <div class="product-price">
                                        <span class="price">120000</span>
                                        <span> VND</span>
                                    </div>
                                    <div class="color-product-list">
                                        <div class="color-type" style="background:brown;">
                                            <div class="color-name">brown
                                            </div>
                                        </div>
                                        <div class="color-type" style="background:black;">
                                            <div class="color-name">black
                                            </div>
                                        </div>
                                        <div class="color-type" style="background:white;">
                                            <div class="color-name">white
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" class="id-product" value="19">
                        </div>
                        <div class="product-item">
                            <div class="top-product-item">
                                <img class="main-pic" src="./img/img-product/sp-21.jpg" alt="">
                                <img class="scale-pic" src="./img/img-product/sp-21.jpg" alt="">
                                <div class="sale-title">10%</div>
                                <div class="fav-btn-ctn">
                                    <ion-icon name="heart-outline"></ion-icon>
                                </div>
                                <div class="view-detail-btn">
                                    <div class="view-detail-btn-title">Xem</div>
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>
                                <div class="view-add-cart-btn">
                                    <div class="view-add-cart-btn-title">Thêm</div>
                                    <ion-icon name="cart-outline"></ion-icon>
                                </div>
                                <div class="view-add-cart">
                                    <div class="vac-headline">
                                        <div class="vac-close-btn">
                                            <ion-icon name="close-outline"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="vac-content">
                                        <div class="color-selection">
                                            <div class="color-title">White</div>
                                            <div class="color-content">
                                                <div class="color-type" style="background:brown;" id="Brown">
                                                </div>
                                                <div class="color-type" style="background:black;" id="Black">
                                                </div>
                                                <div class="color-type" style="background:white;" id="White">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="size-selection">
                                            <div class="size-title">M</div>
                                            <div class="size-content">
                                                <div class="size-type" id='M'>M</div>
                                                <div class="size-type" id="L">L</div>
                                                <div class="size-type" id="XL">XL</div>
                                            </div>
                                        </div>
                                        <div class="price-view">
                                            <div class="price-title">Price</div>
                                            <span class="price"></span>
                                        </div>
                                        <div class="quantity-adjust"> <input class="quantity-number" value="1" min="1"
                                                type="text">
                                            <div class="adjust-btn">
                                                <div class="des-btn">
                                                    <ion-icon name="remove-outline"><ion-icon>
                                                </div>
                                                <div class="asc-btn">
                                                    <ion-icon name="add-outline"></ion-icon>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-cart-cate">
                                            <div class="add-cart-btn">
                                                Thêm vào giỏ hàng
                                            </div>
                                        </div>
                                    </div>
                                    <div class="empty-alert-color">Chưa chọn màu</div>
                                    <div class="empty-alert-size">Chưa chọn size</div>
                                </div>
                            </div>
                            <div class="product-item-content">
                                <div class="product-name">Sản phẩm 21</div>
                                <div class="product-info">
                                    <div class="product-price">
                                        <span class="price">110000</span>
                                        <span> VND</span>
                                    </div>
                                    <div class="color-product-list">
                                        <div class="color-type" style="background:brown;">
                                            <div class="color-name">brown
                                            </div>
                                        </div>
                                        <div class="color-type" style="background:black;">
                                            <div class="color-name">black
                                            </div>
                                        </div>
                                        <div class="color-type" style="background:white;">
                                            <div class="color-name">white
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" class="id-product" value="20">
                        </div>
                        <div class="product-item">
                            <div class="top-product-item">
                                <img class="main-pic" src="./img/img-product/sp-22.jpg" alt="">
                                <img class="scale-pic" src="./img/img-product/sp-22.jpg" alt="">
                                <div class="sale-title">10%</div>
                                <div class="fav-btn-ctn">
                                    <ion-icon name="heart-outline"></ion-icon>
                                </div>
                                <div class="view-detail-btn">
                                    <div class="view-detail-btn-title">Xem</div>
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>
                                <div class="view-add-cart-btn">
                                    <div class="view-add-cart-btn-title">Thêm</div>
                                    <ion-icon name="cart-outline"></ion-icon>
                                </div>
                                <div class="view-add-cart">
                                    <div class="vac-headline">
                                        <div class="vac-close-btn">
                                            <ion-icon name="close-outline"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="vac-content">
                                        <div class="color-selection">
                                            <div class="color-title">White</div>
                                            <div class="color-content">
                                                <div class="color-type" style="background:brown;" id="Brown">
                                                </div>
                                                <div class="color-type" style="background:black;" id="Black">
                                                </div>
                                                <div class="color-type" style="background:white;" id="White">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="size-selection">
                                            <div class="size-title">M</div>
                                            <div class="size-content">
                                                <div class="size-type" id='M'>M</div>
                                                <div class="size-type" id="L">L</div>
                                                <div class="size-type" id="XL">XL</div>
                                            </div>
                                        </div>
                                        <div class="price-view">
                                            <div class="price-title">Price</div>
                                            <span class="price"></span>
                                        </div>
                                        <div class="quantity-adjust"> <input class="quantity-number" value="1" min="1"
                                                type="text">
                                            <div class="adjust-btn">
                                                <div class="des-btn">
                                                    <ion-icon name="remove-outline"><ion-icon>
                                                </div>
                                                <div class="asc-btn">
                                                    <ion-icon name="add-outline"></ion-icon>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-cart-cate">
                                            <div class="add-cart-btn">
                                                Thêm vào giỏ hàng
                                            </div>
                                        </div>
                                    </div>
                                    <div class="empty-alert-color">Chưa chọn màu</div>
                                    <div class="empty-alert-size">Chưa chọn size</div>
                                </div>
                            </div>
                            <div class="product-item-content">
                                <div class="product-name">Sản phẩm 22</div>
                                <div class="product-info">
                                    <div class="product-price">
                                        <span class="price">440000</span>
                                        <span> VND</span>
                                    </div>
                                    <div class="color-product-list">
                                        <div class="color-type" style="background:brown;">
                                            <div class="color-name">brown
                                            </div>
                                        </div>
                                        <div class="color-type" style="background:black;">
                                            <div class="color-name">black
                                            </div>
                                        </div>
                                        <div class="color-type" style="background:white;">
                                            <div class="color-name">white
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" class="id-product" value="21">
                        </div>
                    </div>
                </div>
                <div class="more-product-space">
                            <div class="more-product-btn see-more-btn">
                                <button>Xem Thêm</button>
                            </div>
                </div>
            </div>
        </div>
    <?php require_once './footer.php' ?>
    </div>
</body>
<script src="./js/header/search-bar.js"></script>
<script src="./js/header/slider.js"></script>
<script src="./js/header/sticky-header.js"></script>
<script src="./js/container/cart/add-cart.js"></script>
<script src="./js/header/body-cart.js"></script>
<script src="./js/container/cart/view-add-cart.js"></script>
<script src="./js/container/cart/content-add-cart.js"></script>
<script src="./js/container/see-more.js"></script>
</html>