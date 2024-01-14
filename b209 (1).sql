-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2024-01-14 21:47:41
-- サーバのバージョン： 10.4.28-MariaDB
-- PHP のバージョン: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `b209`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `questions1`
--

CREATE TABLE `questions1` (
  `id` int(11) NOT NULL,
  `question_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `questions1`
--

INSERT INTO `questions1` (`id`, `question_text`) VALUES
(1, '個人実況者がいい'),
(2, '無編集がいい'),
(3, 'マインクラフトの実況が好き'),
(4, 'FPSが好き'),
(5, 'ホラーゲームが好き'),
(6, 'ゲーム実況がメインの実況者がいい'),
(7, 'コメディやエンターテインメントが強い実況が好き'),
(8, '特定のゲームにフォーカスした実況が好き'),
(9, '個性的なキャラクターと独自のエンターテインメントを楽しみたい');

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`username`, `password`, `id`) VALUES
('kasumi', '$2y$10$YH2owZMgQebJcKRALf9pDe.Q1DzGxBVktI10VNumqc8bIZ32ZGxq6', 1),
('aa', '$2y$10$NJgw/4s5Ik/oqHekJPN3W.V5.HTtIY/SZhCNX5tq78EBJ7b.At6xq', 2),
('aaa', '$2y$10$BumKDZvS2D4MCjurKRIuB.vopF5P9AojGJOrS9wyCvfMZuajpevzG', 3),
('bbb', '$2y$10$DrC4.FnAVPOn6BJmMlKb0eJ02w3xJYyGbeqPhKZAYghLIF7kE0peK', 4);

-- --------------------------------------------------------

--
-- テーブルの構造 `youtubers`
--

CREATE TABLE `youtubers` (
  `name` varchar(255) NOT NULL,
  `explanation` text NOT NULL,
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `youtubers`
--

INSERT INTO `youtubers` (`name`, `explanation`, `id`, `img`) VALUES
('SAWAYAN GAMES / サワヤン ゲームズ', 'サワヤン（SAWAYAN）はウクライナ兄弟YouTuber、サワとヤンによるグループ。2020年2月から実写・ゲーム実況などの動画投稿。挨拶と台パンが特徴。主チャンネル「SAWAYAN CHANNEL」ではバラエティ、最多登録者の「SAWAYAN GAMES」ではゲーム実況。', 0, 'img/sawayan.jpg'),
('White Tails', 'ワイテルズは2016年に結成されたMinecraftを中心としたYouTuberグループ。メンバーは高校の同級生で、PvPバトルや独自の人狼ゲームなどのゲーム実況が特徴。2018年には他実況者とのコラボで急成長。2020年には登録者20万人、2022年には25万人を突破し3Dモデル化。2021年には5周年、2023年には7周年を迎え、グッズや振り子時計が発売。メンバーにはNakamu、Broooock、シャークん、きんとき、スマイル、きりやんがいる。', 10101, 'img/waite.jpg'),
('日常組', '男性５人のグループ実況者', 1000110, 'img/nichijougumi.jpg'),
('主役は我々だ！', 'ゲーム実況を中心に、TRPGや科学をテーマにした実写、政治や経済を解説する動画を提供する大人数グループで、ニコニコ、YouTubeで活動中。\r\nコミックアルナで漫画「異世界の主役は我々だ！」「エンプレスエイジ ～闇社会の主役は我々だ！」「ヘルドクターくられの科学はすべてを解決する！」週刊少年チャンピオンで「魔界の主役は我々だ！」ヤングエースUPで「我演義 〜乱世の主役は我々だ！〜」を連載中。', 1000111, 'img/wrwrd.jpg'),
('M.S.S Project', '\r\nM.S.S Projectは4人組のゲーム実況者グループ。初めは2人から始まり、Haloのマルチプレイで仲間が増えて生まれた。\"Middle Second Sickness Project\"の名の通り、中二病全開のトークが特徴。彼らのカオスな実況とチームワークのなさが人気。ゲームだけでなく、東京ゲームショウや映画祭のサポートも。音楽制作も手がけ、ライブも成功。2021年にはYouTubeで新チャンネルを始動。2023年には所属事務所との和解があり、ゲーム実況と実写コンテンツの2つのチャンネルで活動。', 1001101, 'img/mss.jpg'),
('ナポリの男たち', '「ナポリの男たちッ」は、ジャック・オ・蘭たん、すぎる、hacchi、shu3の4人で構成されるグループで、2016年にコラボ実況を始め、2017年にはニコニコユーザーチャンネル「ナポリの男たちch」を開設。グループの方針は「介護疲れに効く動画」を制作すること。各メンバーは異なるイメージカラーと特徴を持ち、主に企画動画を中心に活動している。', 10010101, 'img/napolimen.jpg'),
('兄者弟者', '兄者、弟者、おついちの三人で活動するYouTuberであり、ゲーム実況を中心とした日本を代表する実況者である。\r\nYouTubeでFPS、TPS、ホラーゲームなどを中心としたゲーム実況動画を投稿・配信しており、兄者と弟者は実の兄弟である', 10111011, 'img/2bro.jpg'),
('花江夏樹', '\r\n超人気声優花江夏樹のゲーム実況チャンネル。ホラーゲームから幅広いジャンルをカバーし、声優仲間との「男たちシリーズ」が人気。特に叫び声やフラグ回収が注目。企業案件やアニメゲーム実況はプロモーションとして活用。個人で運営し、登録者200万人を突破。アドリブの上手さやコラボでのトレンド入りも注目ポイント。', 100011101, 'img/hanae.jpg'),
('ヒカキン', '「ブンブンハローYouTube! どうもHIKAKINです。」実況動画やライブ配信を行うゲームチャンネル。2013年に開設し、2023年に10周年を迎えた。登録者数は500万人を超えており、日本のチャンネルとしては、サブチャンネル・ゲームチャンネルとして共に1位となっている。', 101001010, 'img/hikakin.jpg'),
('YY channel', '2009年に実況者として活動を開始し、独特なコンテンツでファンを魅了。過去には動画投稿の休止や復帰を繰り返し、2015年にYouTubeに移行。2022年8月にCrazy Raccoon・STREAMER部門に加入。活動名はFPSゲームのアカウント名からきている。広範なジャンルの実況や歌ってみた動画を制作。ユーザーに「おじさん」と呼ばれ、幅広い交流がある。猫のオセロとミューを飼っており、多くの有名人がファンである', 101010101, 'img/yy.jpg'),
('赤髮のとも', 'YouTubeで活躍するゲーム実況者で、日本のYouTubeチャンネル登録者ランキングで最高順位13位を記録。2009年に始めた活動はマインクラフトやGTA5実況が主軸。歴史的なコラボやオリジナル曲「ダイヤモンド」で知られ、個性的な実写動画も。多趣味で、ウサギ愛好者である彼は、広範なコンテンツで長寿を誇り、YouTubeランキングで大成功を収めている。\r\n', 101100011, 'img/akagaminotomo.jpg'),
('らっだぁ', '2010年9月18日からニコニコ生放送で実況活動を開始。現在は配信プラットフォーム・Twitchでゲーム配信を行い、アーカイブを編集したものをYouTubeに投稿している。', 101110111, 'img/radao.jpg'),
('ガッチマン', 'ガッチマンはホラーゲーム主体の実況者で、妻はトラちん。YouTubeで活動し、Vtuberも。解説実況や独自のプレイスタイルが魅力。書籍もあり、月曜以外週6で動画投稿。TOP4実況が特別で、悲鳴少なく、マッピング能力や聴覚に優れる。外部コラボには慎重だが、TOP4実況では柔軟。ユニークで人気の高い実況者。', 110011011, 'img/gati.jpg'),
('キヨ', 'YouTubeやニコニコ動画にゲーム実況動画をメインに投稿していて、2014年に開設したYouTubeチャンネルは専業ゲーム実況者1位の登録者数450万人を超える。ゲーム実況グループ最終兵器俺達のメンバーである。また、同じゲーム実況者であるレトルト、牛沢、ガッチマンの4人を合わせて日本TOP4と呼ばれている。', 110011100, 'img/kiyo.png'),
('SHAKAch', '\r\n福岡出身の元プロゲーマー・YouTuber。『AVA』で18回の優勝や4年連続世界大会、『PUBG』解説者。身長180cm、水泳が特技。Twitchで長時間配信で有名。2020年の気絶一幕や、2021年の『VALORANT』週間視聴ランキングで世界8位入りが話題。ゲーム実績や豊かなパーソナリティー、活動幅が世界的に注目を浴びている。', 110100101, 'img/shaka.png'),
('赤身かるび', '\r\n赤見かるびはTwitchとYouTubeで活動するバーチャルYouTuber。独特な声質と無法者な性格が特徴で、失言もあるが一生懸命な姿勢でファンを引きつけている。2021年1月Twitchデビュー、11月YouTube開始。ストリートファイター6での活躍が注目され、REJECT FIGHT NIGHTやCRCup Street Fighter6などで活躍。VCR GTAでは「お肉の組」のボスとして安定のお笑い提供。', 110100111, 'img/karubi.jpeg'),
('ポッキー', 'ホラーゲームや日本国外のインディーズゲームを中心に実況動画を投稿している。2011年からYouTubeでの活動を始め、2013年に開設したメインチャンネルの登録者数は300万人を超える。', 111010000, 'img/pocky.jpeg'),
('ぴくとはうす', '滑舌の悪さやビビり、クソぼっちといったキャラクターで知られる。1993年12月3日生まれ。マイクラ実況を主軸に、MODや茶番、かくれんぼなどの動画を投稿。マンガ好きで鬼滅の刃や呪術廻戦のMODシリーズも制作。歌ってみた動画では滑舌が改善する謎の一面あり。2022年4月、YouTubeチャンネル登録者数が100万人を突破。名前の由来は非常口の緑マーク「ピクトグラム」。所属は無し。猫のぐーちゃんとアメちゃんの飼い主で、Twitterのサブアカウントで猫たちの日常も公開。', 111010101, 'img/pict.jpg'),
('狩野英孝', '\r\n狩野英孝は「EIKO!GO!!」というゲーム実況チャンネルで活躍。DbDでの奇想天外なプレイや「勝手に斧振らないで！」の名言が話題。その他にもバイオハザードシリーズでのプレイや多彩な名言・名場面がファンを引き込んでおり、公式での採用も。独特の笑いの才能と、上手すぎない親しみやすい姿勢が魅力。笑いの神のような存在であり、視聴者との交流やポンコツキャラの魅力が「EIKO!GO!!」の人気の秘密。', 111111111, 'img/eikou.jpg');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `questions1`
--
ALTER TABLE `questions1`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `youtubers`
--
ALTER TABLE `youtubers`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `questions1`
--
ALTER TABLE `questions1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- テーブルの AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
