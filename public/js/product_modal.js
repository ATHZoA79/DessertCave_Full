const product_card_area = document.querySelector(".product-card-area");
const product_detail = document.querySelector(".product-detail-area");
const product_detail_close = document.querySelector(".product-detail-close");
const product_detail_opacity = document.querySelector(
    ".product-detail-opacity"
);
const product_sheet = document.querySelectorAll(".product-series");
const product_detail_img = document.querySelector(".product-detail-img");
const product_detail_name = document.querySelector(".product-detail-name");
const product_detail_content = document.querySelector(
    ".product-detail-content"
);

// Product Datas
var product = {
    // Structure
    // series: {
    // 	item1: {},
    // 	item2: {},
    // ...
    // },
    chocolate: {
        // Series 1
        hazelnut: {
            name_zh: "焦糖榛果生巧克力塔",
            content:
                "使用了Corseglia 西西里100%榛果醬及巴瑞可可脆片製作內餡，香脆可口，帶有濃厚的榛果味，搭配榛果奶油餡和特製生巧克力餡，滑順不油膩",
        },
        fafna: {
            name_zh: "橙香法芙娜生巧塔",
            content:
                "選用了台灣柑橘以及帶有花果香的法芙娜巧克力等食材，讓生巧克力塔吃起來清爽不沈重！搭配上層黑巧克力蛋奶醬，使巧克力口感更濃郁！",
        },
    },
    nut: {
        // Series 2
        Tiramisu: {
            name_zh: "提拉米蘇",
            content:
                "使用正統義式提拉米蘇製作手法，產生出綿密且柔順的口感，搭配卡魯瓦手指餅乾與消化餅，使咖啡的味道濃郁。",
        },
        honeydrupe: {
            name_zh: "蜂蜜太妃核果塔",
            content:
                "選用美國核桃、杏仁、蓁果以及夏威夷果製作而成的鮮奶油太妃醬，融合口感綿密的杏仁奶油餡與酥脆塔皮，每一口都吃的到滿滿的堅果香氣",
        },
    },
    matcha: {
        // Series 3
        redbeans: {
            name_zh: "萬丹卡士達抹茶紅豆塔",
            content:
                "嚴選萬丹紅豆與靜岡抹茶熬煮成抹茶紅豆餡最為基底，搭配中層白抹茶甘納許與上層抹茶卡士達醬，口感綿密，紅豆香氣濃郁",
        },
    },
    fruit: {
        // Series 4
        apple: {
            name_zh: "生乳酪蘋果蛋糕",
            content:
                "生乳酪蘋果蛋糕使用法國進口乳酪，搭配富士蘋果切成的蘋果丁，口感清爽、滑順",
        },
        charlotte2: {
            name_zh: "香草荔葡萄夏洛特",
            content:
                "嚴選美國加州綠葡萄與清爽荔枝庫里完美搭配 以馬達加斯加香草慕斯作為基底，滿滿的綠葡萄與香草氣息，襯托出清爽口感",
        },
        lemon3: {
            name_zh: "義式奶油檸檬塔",
            content:
                "嚴選屏東有機檸檬與法國愛樂薇奶油製作出的檸檬餡，再搭配軟綿義式蛋白霜與酥脆塔皮，酸甜度適中，檸檬香氣重！",
        },
        grapelemon: {
            name_zh: "綠葡萄檸檬乳酪",
            content:
                "嚴選加州綠葡萄，搭配兩種不同口感乳酪(重乳酪、乳酪香緹)，再以奶油檸檬醬作為壓軸",
        },
        blueberry: {
            name_zh: "藍莓乳酪塔",
            content:
                "以新鮮的美國藍莓製成果醬，搭配口感綿密的法國白乳酪，香氣濃郁，從果醬到乳酪餡全城皆是手工製成，絕不天加任何香料和添加物",
        },
    },
    room_temp: {
        // Series 5
        saturdaylemon: {
            name_zh: "周末檸檬磅蛋糕",
            content:
                "選用屏東有機檸檬呈現出天然檸檬香氣，加入法國發酵奶油一起烘烤，搭配檸檬皇家糖霜增加層次，口感清爽不乾燥",
        },
        financier: {
            name_zh: "黃金果仁費南雪",
            content:
                "以發酵奶油製成的黃金焦香奶油與杏仁奶餡融合，將天然有機核果一起烘烤後，形成奶油香十足的法式費南雪蛋糕",
        },
        madeleine: {
            name_zh: "蜂蜜檸檬瑪德蓮",
            content:
                "選用屏東檸檬與龍眼蜂蜜作為口味基底，添加法國發酵奶油一起烘烤，形成清爽的瑪德蓮蛋糕體，口感鬆軟帶有淡淡的蜂蜜奶油香。",
        },
    },
    others: {
        sesame: {
            name_zh: "Sesame Sesame",
            content:
                "以芝麻為基底製作而成的芝麻乳酪餡，搭配滑順豆漿慕斯，並以瑪士卡彭起司香緹以及杏仁糖烤脆餅裝飾，酥脆的口感加上濃郁的芝乳酪，是全家大小都適合的甜點！",
        },
        cheesecake2: {
            name_zh: "巴斯克乳酪",
            content:
                "濃郁的乳酪香氣，加上帶有焦香味的外殼、以及入口即化的內餡是巴斯克起司蛋糕的特色！",
        },
        belgium: {
            name_zh: "比利時巧克力慕斯蛋糕",
            content:
                "!!本蛋糕有添加些許黑醋栗香甜酒!! <br> 嚴選 70.5 %比利時巧克力製成慕斯及卡士達醬，搭配鬆軟海綿蛋糕，內層以榛果巧克力脆片增加層次感，口感豐富。",
        },
    },
};
// End of Product Datas

function showProductCards(series, item) {
    // Generate product cards
    product_card_area.innerHTML = "";
    for (key in item) {
        product_card_area.innerHTML += `
							<div class="product-card">
								<div class="img-container">
								${
                                    screen.width > 430
                                        ? `<img src="./img/product/${series}/${key}.png" data-product="${key}" alt="空產品">`
                                        : `<img src="./img/product/${series}/${key}-phone.png" data-product="${key}" alt="空產品">`
                                }
                  </div>
								<div class="product-name">
										<h3>${item[key].name_zh}</h3>
								</div>
							</div>
						`;
    }
}
function createProductDetail() {
    product_card.forEach((card) => {
        // Create modal for default cards
        card.addEventListener("click", function show_detail() {
            product_detail.classList.toggle("block-display");
            // Search product object by product name
            let t_series, t_item, series_key, item_key;
            for (let series in product) {
                for (let item in product[series]) {
                    if (
                        product[series][item].name_zh ===
                        card.querySelector(".product-name>h3").innerText
                    ) {
                        item_key = item;
                        t_item = product[series][item];
                        series_key = series;
                        t_series = series;
                        break;
                    }
                }
            }
            product_detail.innerHTML = `
                    <div class="product-detail-opacity"></div>
                    <div class="product-detail-card-container">
                      <div class="product-detail-card">
                        <div class="product-detail-close"><i class="bi bi-x-lg"></i></div>
													<div class="product-detail-img">${
                                                        screen.width > 430
                                                            ? `<img src="./img/product/${series_key}/${item_key}-detail.png" alt="">`
                                                            : `<img src="./img/product/${series_key}/${item_key}-detail-phone.png" alt="">`
                                                    }
													</div>
                        <div class="product-detail-text">
                          <div class="product-detail-name">${
                              t_item.name_zh
                          }</div>
                          <div class="product-detail-content">${
                              t_item.content
                          }</div>
                        </div>
                    `;

            document
                .querySelector(".product-detail-close")
                .addEventListener("click", close_detail);
            document
                .querySelector(".product-detail-opacity")
                .addEventListener("click", close_detail);
        });
    });
}
function close_detail() {
    product_detail.classList.toggle("block-display");
}
async function setCards() {
    if (product_sheet[0].classList.contains("bg-pink")) {
        showProductCards("chocolate", product.chocolate);
        createProductDetail();
    } else if (product_sheet[1].classList.contains("bg-pink")) {
        showProductCards("nut", product.nut);
        createProductDetail();
    } else if (product_sheet[2].classList.contains("bg-pink")) {
        showProductCards("matcha", product.matcha);
        createProductDetail();
    } else if (product_sheet[3].classList.contains("bg-pink")) {
        showProductCards("fruit", product.fruit);
        createProductDetail();
    } else if (product_sheet[4].classList.contains("bg-pink")) {
        showProductCards("room_temp", product.room_temp);
        createProductDetail();
    } else {
        showProductCards("others", product.others);
        createProductDetail();
    }
}

// Main
const product_card = document.querySelectorAll(".product-card");
createProductDetail();

product_sheet.forEach((sheet) => {
    sheet.addEventListener("click", function () {
        product_sheet.forEach((element) => {
            element.classList.remove("bg-pink");
        });
        sheet.classList.add("bg-pink");
				setCards();
    });
});
