import 'package:flutter/material.dart';

// import '../model/contact.dart';
import 'package:flutter_todo_app/model/contact.dart';
// import '../constants/colors.dart';
import 'package:flutter_todo_app/constants/colors.dart';

class ContactItem extends StatelessWidget {
  final Contact contact;
  final onToDoChanged;
  final onDeleteItem;

  const ContactItem({
    Key? key,
    required this.contact,
    required this.onToDoChanged,
    required this.onDeleteItem,
  }) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return Container(
      margin: EdgeInsets.only(bottom: 20),
      child: ListTile(
        onTap: () {
          // print('Clicked on Todo Item.');
          onToDoChanged(contact);
        },
        shape: RoundedRectangleBorder(
          borderRadius: BorderRadius.circular(20),
        ),
        contentPadding: EdgeInsets.symmetric(horizontal: 20, vertical: 5),
        tileColor: Colors.white,
        leading: Icon(
          contact.isActive ? Icons.check_box : Icons.check_box_outline_blank,
          color: tdBlue,
        ),
        title: Text(
          contact.contactEmail!,
          style: TextStyle(
            fontSize: 16,
            color: tdBlack,
            decoration: contact.isActive ? TextDecoration.lineThrough : null,
          ),
        ),
        trailing: Container(
          padding: EdgeInsets.all(0),
          margin: EdgeInsets.symmetric(vertical: 12),
          height: 35,
          width: 35,
          decoration: BoxDecoration(
            color: tdRed,
            borderRadius: BorderRadius.circular(5),
          ),
          child: IconButton(
            color: Colors.white,
            iconSize: 18,
            icon: Icon(Icons.delete),
            onPressed: () {
              // print('Clicked on delete icon');
              onDeleteItem(contact.id);
            },
          ),
        ),
      ),
    );
  }
}
