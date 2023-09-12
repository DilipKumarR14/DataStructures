package com.test.two.pointer;

import java.util.ArrayList;

public class ArithemticTriplets {

	public static void main(String[] args) {
		int[] nums1 = new int[] { 0, 1, 4, 6, 7, 10 };
		int diff = 3;

		ArrayList<Integer> nums = new ArrayList<Integer>(nums1.length);

		for (int i = 0; i < nums1.length; i++) {
			nums.add(nums1[i]);
		}

		final int kMax = 200;
		int ans = 0;
		boolean[] count = new boolean[kMax + 1];

		for (final int num : nums) {
			boolean b = num >= 2 * diff;
			
			if (b && count[num - diff] && count[num - 2 * diff]) {
				++ans;
			}
			count[num] = true;
		}

		System.out.println(ans);

	}

}
