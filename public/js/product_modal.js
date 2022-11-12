var product_card_area = document.querySelector(".product-card-area");
var product_detail = document.querySelector(".product-detail-area");
var product_detail_close = document.querySelector(".product-detail-close");
var product_detail_opacity = document.querySelector(".product-detail-opacity");
var product_sheet = document.querySelectorAll(".product-series");

var product = {
  chocolate: {
    hazelnut: {
      name_zh: "焦糖榛果生巧克力塔",
      content: "使用了Corseglia 西西里100%榛果醬及巴瑞可可脆片製作內餡，香脆可口，帶有濃厚的榛果味，搭配榛果奶油餡和特製生巧克力餡，滑順不油膩",
    },
    fafna: {
      name_zh: "橙香法芙娜生巧塔",
      content: "選用了台灣柑橘以及帶有花果香的法芙娜巧克力等食材，讓生巧克力塔吃起來清爽不沈重！搭配上層黑巧克力蛋奶醬，使巧克力口感更濃郁！",
    },
  },
  nut: {
    Tiramisu: {
      name_zh: "提拉米蘇",
      content: "使用正統義式提拉米蘇製作手法，產生出綿密且柔順的口感，搭配卡魯瓦手指餅乾與消化餅，使咖啡的味道濃郁。",
    },
    honeydrupe: {
      name_zh: "橙蜂蜜太妃核果塔",
      content: "選用美國核桃、杏仁、蓁果以及夏威夷果製作而成的鮮奶油太妃醬，融合口感綿密的杏仁奶油餡與酥脆塔皮，每一口都吃的到滿滿的堅果香氣",
    }
  },
  matcha: {
    redbeans: {
      ame_zh: "萬丹卡士達抹茶紅豆塔",
      content: "選用美國核桃、杏仁、蓁果以及夏威夷果製作而成的鮮奶油太妃醬，融合口感綿密的杏仁奶油餡與酥脆塔皮，每一口都吃的到滿滿的堅果香氣",
    },
  },
  fruit: {
    apple: {
      ame_zh: "生乳酪蘋果蛋糕",
      content: "選用美國核桃、杏仁、蓁果以及夏威夷果製作而成的鮮奶油太妃醬，融合口感綿密的杏仁奶油餡與酥脆塔皮，每一口都吃的到滿滿的堅果香氣",
    },
    charlotte2: {
      ame_zh: "香草荔葡萄夏洛特",
      content: "選用美國核桃、杏仁、蓁果以及夏威夷果製作而成的鮮奶油太妃醬，融合口感綿密的杏仁奶油餡與酥脆塔皮，每一口都吃的到滿滿的堅果香氣",
    },
    lemon3: {
      ame_zh: "義式奶油檸檬塔",
      content: "選用美國核桃、杏仁、蓁果以及夏威夷果製作而成的鮮奶油太妃醬，融合口感綿密的杏仁奶油餡與酥脆塔皮，每一口都吃的到滿滿的堅果香氣",
    },
    grapelemon: {
      ame_zh: "綠葡萄檸檬乳酪",
      content: "選用美國核桃、杏仁、蓁果以及夏威夷果製作而成的鮮奶油太妃醬，融合口感綿密的杏仁奶油餡與酥脆塔皮，每一口都吃的到滿滿的堅果香氣",
    },
    blueberry: {
      ame_zh: "藍莓乳酪塔",
      content: "選用美國核桃、杏仁、蓁果以及夏威夷果製作而成的鮮奶油太妃醬，融合口感綿密的杏仁奶油餡與酥脆塔皮，每一口都吃的到滿滿的堅果香氣",
    },
  },
  room_temp: {
    madeleine: {
      ame_zh: "藍莓乳酪塔",
      content: "選用美國核桃、杏仁、蓁果以及夏威夷果製作而成的鮮奶油太妃醬，融合口感綿密的杏仁奶油餡與酥脆塔皮，每一口都吃的到滿滿的堅果香氣",
    },
  }
};

function showProductCards(series, item) {
  for ( key in item ) {
    product_card_area.innerHTML += `
      <div class="product-card">
        <div class="img-container">
        ` +
          (screen.width > 430) ? `<img src="./img/product/${series}/${key}.png" alt="空產品">`:
          `<img src="./img/product/${series}/${key}-phone.png" alt="空產品">`
        + `</div>
        <div class="product-name">
            <h3>${item[key].name_zh}</h3>
        </div>
      </div>
    `;
  }
}
function createProductDetail() {}
