<?php include_once("config.php5"); ?>
<?php include_once(TEMPLATES_PATH."/header.php5"); ?>

<div class="container center-box" id="J-container">
    <!--<div class="loading" id="J-loading">
        <img src="static/images/bwfw.png" class="fling" id="J-bwfw-logo" />
        <p class="fling-reverse2">圣经问答游戏</p>
        <p class="title fling-reverse"><img src="static/images/logo-small.png" class="logo-small"/>杭州基督教磐石堂</p>
    </div>
    <div id="J-introducing" class="introducing hide">
        <div class="introducing-main">
            <nav class="block">
                <img src="static/images/logo.png" id="J-ps-logo"/>
                <ul>
                    <li class="current" id="J-starting">开始游戏</li>
                    <li data-role="rules">游戏规则</li>
                    <li data-role="push">诚意推介</li>
                    <li data-role="people">制作人员</li>
                </ul>
            </nav>
            <div class="flex">
                <div data-role="rules" class="panel">
                    <h1>游戏规则</h1>
                    <div class="content">这里是游戏规则的内容</div>
                </div>
                <div data-role="push" class="hide panel">
                    <h1>诚意推介</h1>
                    <div class="content">这里是诚意推介的内容</div>
                </div>
                <div data-role="people" class="hide panel">
                    <h1>制作人员</h1>
                    <div class="content">这里是制作人员的内容</div>
                </div>
            </div>
        </div>
    </div>
    <div id="J-topics-box" class="introducing hide">
        <div class="introducing-main">
            <nav class="block">
                <img src="static/images/logo.png" />
                <a href="javascript:void(0)" class="back"><返回</a>
            </nav>
            <div class="flex">
                <div data-role="rules" class="panel">
                    <h1>选择主题</h1>
                    <div id="J-topics" class="content"></div>
                </div>
            </div>
        </div>
    </div>-->
    <div id="J-subject-box" class="subject-box">
        <div class="webkit-box">
            <div class="score flex">
                <ul>
                    <li class="1million caper">15<>1 MILLION</li>
                    <li>14<>500000</li>
                    <li>13<>250000</li>
                    <li>12<>150000</li>
                    <li>11<>80000</li>
                    <li class="60000scroe caper">10<>60000</li>
                    <li>9<>40000</li>
                    <li>8<>30000</li>
                    <li>7<>20000</li>
                    <li>6<>10000</li>
                    <li class="8000scroe caper">5<>8000</li>
                    <li>4<>4000</li>
                    <li>3<>3000</li>
                    <li>2<>2000</li>
                    <li>1<>1000</li>
                </ul>
            </div>
            <div class="flex" style="text-align:center;"><img src="static/images/logo.png" /></div>
            <p class="J-currentTopicHtml flex">当前的主题内容</p>
        </div>
        <div id="J-solutions">
            <p id="J-solution-title">
                title
            </p>
            <p class="webkit-box">
                <span class="solution flex">A</span>
                <span class="space flex"></span>
                <span class="solution flex">B</span>
            </p>
            <p class="webkit-box">
                <span class="solution flex">C</span>
                <span class="space flex"></span>
                <span class="solution flex">D</span>
            </p>
        </div>
        <div class="webkit-box" id="J-control">
            <p class="flex">时限</p>
            <p class="flex">
                <a href="javascript:void(0)" id="J-filter">过滤</a>
                <a href="javascript:void(0)" id="J-skip">跳过</a>
                <a href="javascript:void(0)" id="J-tip">提示</a>
            </p>
        </div>
    </div>
</div>
<script type="text/javascript" src="static/js/game.js"></script>

<?php include_once(TEMPLATES_PATH."/footer.php5"); ?>