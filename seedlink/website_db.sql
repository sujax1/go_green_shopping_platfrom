-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 08, 2021 at 03:07 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Launchpads'),
(2, 'Dj Controllers'),
(3, 'Midi Keyboards'),
(4, 'Headphones'),
(5, 'Speakers');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `product_price` float NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `product_short_desc` text NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_category_id`, `product_price`, `product_quantity`, `product_description`, `product_short_desc`, `product_image`) VALUES
(2, 'Pioneer DDJ-400 Controller', 2, 349.99, 9, 'Pioneer DJ DDJ-400, 2-Deck DJ Controller, for rekordbox dj Software (licence key included), 8 Performance Pads, 2-Channel USB Interface. Includes: DDJ-400, USB cable, Warranty, Operating instructions (Quick Start Guide), rekordbox dj Licence Key Card. Take this controller with you wherever you go thanks to the easy grab handles and lightweight design. With a built-in sound card, simply connect the controller to your computer using the provided USB cable to power up and begin playing.', 'Pioneer DJ DDJ-400 2-Deck DJ Controller for rekordbox dj', 'pioneer-dj-rekordbox.jpg'),
(3, 'Launchkey 25 MK3', 3, 109.99, 12, 'Deep and intuitive Ableton Live control - including device Macro control, track select, record, capture MIDI, clip and scene launch, stop/mute/solo, volume, pans and sends. Creative arpeggiator – easy to use but deeply controllable: change rhythm, beat, pattern, octave, Gate and more. Fixed chord Mode – play a chord with one finger - assign a fixed chord shape to the keys and it’ll transpose as you move up and down the keyboard', '25 velocity sensitive keys, 16x RGB pads, pitch and mod wheels', 'launchkey-25-mk3-midi.jpeg'),
(4, 'Line6 Mobile Keys 25', 3, 49.99, 15, '25 velocity-sensitive mini keys. 3 velocity Curves (Default, soft, hard) 6 buttons: octave up/down, PB1/PB2, sustain, part 2. PB1 & PB2 buttons (assignable to: pitch bend, transpose, Vol, pan, track or patch change). Part Two button: assignable to octave, MIDI channel, transpose, layer and latch (momentary)', '25 velocity-sensitive mini key controller', 'line6-mobile-keys-25.jpeg'),
(5, 'Novation Launchpad X', 1, 159.99, 5, '64 RGB pads – Large RGB velocity- and pressure-sensitive pads give you a perfect reflection of your Ableton Live session, making it easier than ever to see your clips and play your instruments Expressively. Ableton Live integration – quickly launch clips and scenes, never lose ideas with capture MIDI, and access performance controls like stop, solo, mute, record arm, volume, pan, and sends to dynamically control your music, no mouse needed.Dynamic note and scale modes – enable you to effortlessly play perfectly in-key basslines, melodies, chords and leads. Launchpad x even knows when you’re drumming and shows your drum rack on the grid', '64 RGB pads Grid Controller for Ableton Live', 'novation-launchpad-x.jpeg'),
(6, 'Launchkey 37 MK3 ', 3, 168.99, 8, 'Deep Ableton Live Integration – Immediate access to all the controls you need and never lose ideas or happy accidents with the Capture Midi function.37 Velocity-sensitive keys and 16 velocity-sensitive pads enable expressive and dynamic performance. Tweak instruments and effects to perfection using the eight rotary encoders.Three chord modes (fixed, scale and user) let you trigger chords with one finger. The powerful arpeggiator will take you to new melodic, harmonic and rhythmic places.', 'Novation 37 MK3 MIDI Keyboard Controller for Ableton Live', 'novation-launchkey-37-mk3.jpeg'),
(7, 'Nektar Aura - Beat Composer', 2, 349.99, 10, 'USB MIDI Controller Step Sequencer, DAW Control Integration,with 16 Performance Pads, Nektarine 2.0 Software,64-step Sequencer', 'Beat Composer & DAW Controller DJ Controller', 'nektar-aura-beat-composer.jpeg'),
(9, 'Mackie MC-350 Professional Headphone', 4, 149.99, 13, 'High-headroom, reference-quality 50mm transducers,premium real leather adjustable headband and conforming ear pads,perfect for mixing, studio recording, critical listening, and personal listening,3 different premium cables with locking bayonet connectors plus gold-plated 1/4\\\" adapter, premium protective case included.', 'Mackie MC Series with Leather Headband MC-350', 'mackie-mc-350.jpeg'),
(10, 'Novation Tracks Groovebox Synthesizer', 1, 449.99, 8, 'Acclaimed, hands-on sequencer: Create 32-step patterns, chainable for up to 256 steps sequences per track. Go off-grid with microtiming, and keep your music evolving with probability and pattern mutate.FX on everything: Douse synths, drums, and incoming audio in lush reverb and delay, make your mix pump with sidechain, and punch with the master compressor.', 'Standalone Groovebox with Synths, Drums and Sequence', 'novation-circuit-tracks.jpeg'),
(11, 'KRK Professional Classic 5\\', 5, 149.99, 7, 'High/Low-frequency controls contour your sound for environment, preference, and music style, and the custom bi-amped, class A/B amp offers large headroom and low distortion. Soft-dome tweeter with optimized waveguide provides smooth, pristine and articulate highs up to 35kHz.', 'Professional Bi-Amp 5\\', 'krk-8s2-8.jpeg'),
(12, 'Novation Impulse 49 Controller', 3, 299.99, 15, 'Ultra-responsive semi weighted keyboard with aftertouch.Full DAW/plug-in control surface with 8 knobs, 9 faders and buttons.Automap 4 control software enables instant hands-on access to your DAW and plug-ins.Multi-function drum pads enable you to warp arpeggios, roll beats and launch clips in Ableton Live.', 'Novation Impulse 49 USB Midi Controller Keyboard', 'novation-impulse-49-usb.jpeg'),
(13, 'Novation Launchkey 61 MK3 Midi Keyboard', 3, 259.99, 23, 'Deep Ableton Live Integration – Immediate access to all the controls you need and never lose ideas or happy accidents with the Capture Midi function.61 Velocity-sensitive keys and 16 velocity-sensitive pads enable expressive and dynamic performance. Tweak instruments and effects to perfection using the eight rotary encoders and nine 45mm faders.Three chord modes (fixed, scale and user) let you trigger chords with one finger. The powerful arpeggiator will take you to new melodic, harmonic and rhythmic places.', 'Launchkey 61 MIDI Keyboard Controller for Ableton Live', 'novation-launchkey-61-mk3.jpeg'),
(14, 'Electro Harmonix Hot Stereo Wired Kulaklık', 4, 189.99, 19, 'Visionary design for unprecedented end-to-end performance Custom 50mm drivers deliver incredible sound Revolutionary personalized fitfor superior comfort Sealed over-ear design forimmersive isolation. It’s a headphone for the true music listener—designed to help you get closer to your music, not just make a fashion statement.', 'Electro Harmonix Hot Threads On Ear Stereo Wired Headphone', 'electro-harmonix-hot.jpeg'),
(15, 'Novation Launchpad Mini MK3 Launchpad', 1, 109.99, 17, '64 RGB pads – RGB pads give you a perfect reflection of your Ableton Live session, making it easier than ever to see your clips. Ableton Live Integration – quickly launch your clips and scenes at the press of a button. Stop, Solo and Mute controls make it easier and more tactile to control your performances, no mouse needed. Three Custom Modes – use Components to customise mappings and control anything MIDI easily from Launchpad Mini.', 'Launchpad Mini MK3 Grid Controller for Ableton Live', 'novation-launchpad-mini-mk3.jpeg'),
(16, 'Novation MK2 Launchpad Mini Grid Controller', 1, 59.99, 9, 'MK2 version of Novation\'s compact USB grid controller designed for Ableton Live; 64 multi-colored backlit pads. Software for Mac and PC, including Ableton Live Lite. Integrates with your iPad via a Camera Connection Kit or Lightning-to-USB camera adapter (sold separately).', 'MK2 Launchpad Mini Compact USB Grid Controller for Ableton Live', 'novation-launchpad-mini-mk2.jpeg'),
(17, 'Pioneer DJ XDJ-RX2 2 Chanel DJ Controller', 2, 1299.99, 5, 'Built-in sound card, mic input circuit, USB bus powered, grab handles on both sides, class compliant so no need to install a driver.Aluminum frame, lightweight and durable flight case for the Pioneer DJ XDJ-RX2, perform straight out of the flight case, convenient cable access.', 'XDJ-RX2 2 DJ Controller, bus powered', 'pioneer-dj-xdj-rx2-2.jpeg'),
(18, 'KRK Rokit RP8G4WN Studio Monitoring Speakers', 5, 479.99, 4, 'This bundle includes: 2 x KRK ROKIT RP7G4 7 G4 6.5\" 2-Way Active Studio Monitoring Speakers 2 x AxcessAbles SMP02P Studio Monitor Speaker Isolation Foam Pads 1 x eStudioStar Polishing Cloth for Bundles 2 x AxcessAbles TRS14-XLR115M Audio Cable - stereo 1/4\" TRS TO XLR male (15ft) 2 x AxcessAbles XLR-XLR20 Audio Cable - XLR Male to XLR Female Professional grade 7\" (Bi-amp) studio monitor designed and engineered in the USA.', 'AxcessAbles Isolation Pads, Audio Cables and eStudioStar Polishing', 'krk-rokit-rp8g4wn.jpeg'),
(19, 'Austrian Audio Hi-X55 Professional Headphone', 4, 449.99, 9, 'High Excursion proprietary drivers - Designed for today\'s contemporary music production.Detachable cable - For replaceability, compact portability and safety from damage. Furnished with 3.5mm (1/8 inch) to 6.3mm (1/4 inch) adapter - Pro or on-the-go.All metal hinges and bow for maximum durability - Ensuring maximum durability and stability.', 'Audio Professional Closed-Back Over-Ear Wired Headphone', 'austrian-audio-hi.jpeg'),
(20, 'Mackie CR3-XBT 3 Inch Studio Monitoring Speaker', 5, 129.99, 24, 'Bundle Includes: Mackie CR3-XBT 3-Inch Multimedia Monitors with Bluetooth (Pair), Knox Gear Studio Monitor Isolation Pads Suitable for 3-4-Inch Speakers (2-Pack) and two Hosa HSS-005 Pro Balanced Interconnect REAN 1/4-Inch to 1/4-Inch TRS Cable (5-Feet). Sound Quality: The Mackie CR3-XBT features premium woofers and tweeters that is powered by high-headroom amplifiers for a clear, punchy sound. All-wood cabinets add warmth and natural resonance.', ' Multimedia Monitors with Bluetooth (Pair) ', 'mackie-cr3-xbt-3.jpeg'),
(21, 'Fenix FMH-2 32 Ohm Monitor Headphone', 4, 34.99, 5, 'Active Noise Cancelling technology. Significant noise reduction for travel, work and anywhere in between. Advanced active noise reduction technology quells airplane cabin noise, city traffic or a busy office, makes you focus on what you want to hear,enjoy your music, movies and videos. The noise cancellation function can work well both in wire and wireless mode. Proprietary 45mm large-aperture drivers. Deep, accurate bass response. The Active Noise Cancelling around-ear headphones from COWIN give you crisp, powerful sound and quiet that helps you enjoy your music better. The goal that provide Customers with better sound quality, is our constant pursuit.', 'Professional Fenix FMH-2 32 Ohm Monitor Wired Headphone', 'fenix-fmh.jpeg'),
(25, 'Novation Launchpad Pro MK3 Grid Controller', 1, 359.99, 5, '64 RGB pads serve as LEDs that match the color of your clips in Ableton so you can focus on the music easily. Velocity and pressure-sensitive pads so you can create expressive drum performances. Immediate access to all mixer controls so you can make changes as needed mid-performance. Powerful Four-Track, 32-step Sequencer, 64 Super-sensitive RGB Pads', 'Launchpad Pro MK3 MIDI Controller and Grid Instrument with Ableton Live', 'launchpad-mk3.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '1234'),
(2, 'crncck', 'crncck@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
