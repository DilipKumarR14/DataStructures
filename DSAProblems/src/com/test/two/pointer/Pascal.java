package com.test.two.pointer;

import java.util.ArrayList;
import java.util.Iterator;
import java.util.List;

public class Pascal {

	public static void main(String[] args) {

		List<Object> arrayOfNumbers = new ArrayList<>();

		int numRows = 5;
		List<Object> arrayCreater1 = new ArrayList<>();

		for (int i = 1; i <= numRows; i++) {
			arrayCreater1 = arrayCreater(arrayOfNumbers, i);
		}
//		System.out.println(arrayCreater1);

	}

	private static List<Object> arrayCreater(List<Object> arrayOfNumbers, int size) {
		ArrayList<Object> al = new ArrayList<>(size);
		System.out.println(al.size());
		System.out.println(size);
		for (int i = 0; i < size; i++) {
			if (i == 0) {
				al.add(i, i + 1);
			} else if (al.size() == size-1) {
				al.set(al.size() - 1, i + 1);
			} else {
				al.add(0);
			}
			System.out.println("arraylist size : "+al.size());

		}

		arrayOfNumbers.add(al);
		
		System.out.println(arrayOfNumbers);


		return arrayOfNumbers;

	}

}
