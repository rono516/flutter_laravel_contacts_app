import 'package:flutter/material.dart';
import 'package:flutter/services.dart';
// import './screens/home.dart';
// import './screens/login_page.dart';
import 'screens/login_page.dart';

// C:\Users\rono collins\AppData\Local\Android\Sdk\platform-tools>adb connect localhost:54127

void main() {
  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({Key? key}) : super(key: key);

  // This widget is the root of your application.
  @override
  Widget build(BuildContext context) {
    SystemChrome.setSystemUIOverlayStyle(
        SystemUiOverlayStyle(statusBarColor: Colors.transparent));
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      title: 'Contacts App',
      // home: Home(),
      home: LoginPage(),
    );
  }
}
