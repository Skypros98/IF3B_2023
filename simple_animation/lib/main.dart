import 'package:flutter/material.dart';
import 'package:simple_animation/home_screen.dart';

void main() {
  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({super.key});
  @override
  Widget build(BuildContext context) {
    return const MaterialApp(
      title: 'Simple Animation',
      home: HomeScreen(),
    );
  }
}
