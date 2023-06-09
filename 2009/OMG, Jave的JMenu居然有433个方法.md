# OMG, Jave的JMenu居然有433个方法
>date: 2009-03-14T20:49:04+08:00


Java的Swing类库中有一个类叫JMenu，这个类上面有7层的继承，加上所有被继承下来的方法，这个类一共有433个方法，虽然，很多类是从上面继承下来的，而它自己的方法并没有定义太多的方法，不过，继承体系过深，在底层类上要想知道所有的继承下来的东西并不是一样容易的事情。这个例子展示了一个滥用代码重用的反面案例。我个人认为我们应该反思一下滥用面向对象的作法。


要把Java一个类所有的方法例出来并不是一件难事，使用Javascript 利用Firefox浏览器所支持的Package来穷举JMenu的方法可以很方便的列出所有的方法。


  

下面是这段Javascripts程序：


 



```

 jmenu = new Packages.javax.swing.JMenu( );

 methods = jmenu.getClass( ).getMethods( );

 regx = /j[^( ]+([^)]\*)/; // match just the method

 for (var i = 0, jsArray=[], name = ""; 
 i < methods.length; 
 i++ ) 
 {
 name = methods[ i ].toString( );
 jsArray.push( name.match( regx )[ 0 ] );
 }

 jsArray = jsArray.sort( );

 result = " <ol>";
 for(var i = 0; i<jsArray.length; i++){
 result += " <li>"+ jsArray[i] +" </li>";
 }
 result += " </ol>";

 document.write(result);


```

虽然，在Firefox下有比较严格的安全限制，我们并不一定能够使用Swing类库中所有的Java方法，但我们查看一下其继承体系和一个类所拥有的方法却没有什么安全问题。


使用上面那段程序，你可以在Firefox中输出JMenu的433个如下的方法，下面是的列表中JMenu的方法在最后。


下面你可以理解为是在灌水：


1. java.awt.Component.action(java.awt.Event,java.lang.Object)
2. java.awt.Component.add(java.awt.PopupMenu)
3. java.awt.Component.addComponentListener(java.awt.event.ComponentListener)
4. java.awt.Component.addFocusListener(java.awt.event.FocusListener)
5. java.awt.Component.addHierarchyBoundsListener(java.awt.event.HierarchyBoundsListener)
6. java.awt.Component.addHierarchyListener(java.awt.event.HierarchyListener)
7. java.awt.Component.addInputMethodListener(java.awt.event.InputMethodListener)
8. java.awt.Component.addKeyListener(java.awt.event.KeyListener)
9. java.awt.Component.addMouseListener(java.awt.event.MouseListener)
10. java.awt.Component.addMouseMotionListener(java.awt.event.MouseMotionListener)
11. java.awt.Component.addMouseWheelListener(java.awt.event.MouseWheelListener)
12. java.awt.Component.bounds()
13. java.awt.Component.checkImage(java.awt.Image,int,int,java.awt.image.ImageObserver)
14. java.awt.Component.checkImage(java.awt.Image,java.awt.image.ImageObserver)
15. java.awt.Component.contains(java.awt.Point)
16. java.awt.Component.createImage(int,int)
17. java.awt.Component.createImage(java.awt.image.ImageProducer)
18. java.awt.Component.createVolatileImage(int,int)
19. java.awt.Component.createVolatileImage(int,int,java.awt.ImageCapabilities)
20. java.awt.Component.dispatchEvent(java.awt.AWTEvent)
21. java.awt.Component.enable(boolean)
22. java.awt.Component.enableInputMethods(boolean)
23. java.awt.Component.firePropertyChange(java.lang.String,byte,byte)
24. java.awt.Component.firePropertyChange(java.lang.String,double,double)
25. java.awt.Component.firePropertyChange(java.lang.String,float,float)
26. java.awt.Component.firePropertyChange(java.lang.String,long,long)
27. java.awt.Component.firePropertyChange(java.lang.String,short,short)
28. java.awt.Component.getBackground()
29. java.awt.Component.getBounds()
30. java.awt.Component.getColorModel()
31. java.awt.Component.getComponentListeners()
32. java.awt.Component.getComponentOrientation()
33. java.awt.Component.getCursor()
34. java.awt.Component.getDropTarget()
35. java.awt.Component.getFocusCycleRootAncestor()
36. java.awt.Component.getFocusListeners()
37. java.awt.Component.getFocusTraversalKeysEnabled()
38. java.awt.Component.getFont()
39. java.awt.Component.getForeground()
40. java.awt.Component.getGraphicsConfiguration()
41. java.awt.Component.getHierarchyBoundsListeners()
42. java.awt.Component.getHierarchyListeners()
43. java.awt.Component.getIgnoreRepaint()
44. java.awt.Component.getInputContext()
45. java.awt.Component.getInputMethodListeners()
46. java.awt.Component.getInputMethodRequests()
47. java.awt.Component.getKeyListeners()
48. java.awt.Component.getLocale()
49. java.awt.Component.getLocation()
50. java.awt.Component.getLocationOnScreen()
51. java.awt.Component.getMouseListeners()
52. java.awt.Component.getMouseMotionListeners()
53. java.awt.Component.getMousePosition()
54. java.awt.Component.getMouseWheelListeners()
55. java.awt.Component.getName()
56. java.awt.Component.getParent()
57. java.awt.Component.getPeer()
58. java.awt.Component.getPropertyChangeListeners()
59. java.awt.Component.getPropertyChangeListeners(java.lang.String)
60. java.awt.Component.getSize()
61. java.awt.Component.getToolkit()
62. java.awt.Component.getTreeLock()
63. java.awt.Component.gotFocus(java.awt.Event,java.lang.Object)
64. java.awt.Component.handleEvent(java.awt.Event)
65. java.awt.Component.hasFocus()
66. java.awt.Component.hide()
67. java.awt.Component.inside(int,int)
68. java.awt.Component.isBackgroundSet()
69. java.awt.Component.isCursorSet()
70. java.awt.Component.isDisplayable()
71. java.awt.Component.isEnabled()
72. java.awt.Component.isFocusOwner()
73. java.awt.Component.isFocusTraversable()
74. java.awt.Component.isFocusable()
75. java.awt.Component.isFontSet()
76. java.awt.Component.isForegroundSet()
77. java.awt.Component.isLightweight()
78. java.awt.Component.isMaximumSizeSet()
79. java.awt.Component.isMinimumSizeSet()
80. java.awt.Component.isPreferredSizeSet()
81. java.awt.Component.isShowing()
82. java.awt.Component.isValid()
83. java.awt.Component.isVisible()
84. java.awt.Component.keyDown(java.awt.Event,int)
85. java.awt.Component.keyUp(java.awt.Event,int)
86. java.awt.Component.list()
87. java.awt.Component.list(java.io.PrintStream)
88. java.awt.Component.list(java.io.PrintWriter)
89. java.awt.Component.location()
90. java.awt.Component.lostFocus(java.awt.Event,java.lang.Object)
91. java.awt.Component.mouseDown(java.awt.Event,int,int)
92. java.awt.Component.mouseDrag(java.awt.Event,int,int)
93. java.awt.Component.mouseEnter(java.awt.Event,int,int)
94. java.awt.Component.mouseExit(java.awt.Event,int,int)
95. java.awt.Component.mouseMove(java.awt.Event,int,int)
96. java.awt.Component.mouseUp(java.awt.Event,int,int)
97. java.awt.Component.move(int,int)
98. java.awt.Component.nextFocus()
99. java.awt.Component.paintAll(java.awt.Graphics)
100. java.awt.Component.postEvent(java.awt.Event)
101. java.awt.Component.prepareImage(java.awt.Image,int,int,java.awt.image.ImageObserver)
102. java.awt.Component.prepareImage(java.awt.Image,java.awt.image.ImageObserver)
103. java.awt.Component.remove(java.awt.MenuComponent)
104. java.awt.Component.removeComponentListener(java.awt.event.ComponentListener)
105. java.awt.Component.removeFocusListener(java.awt.event.FocusListener)
106. java.awt.Component.removeHierarchyBoundsListener(java.awt.event.HierarchyBoundsListener)
107. java.awt.Component.removeHierarchyListener(java.awt.event.HierarchyListener)
108. java.awt.Component.removeInputMethodListener(java.awt.event.InputMethodListener)
109. java.awt.Component.removeKeyListener(java.awt.event.KeyListener)
110. java.awt.Component.removeMouseListener(java.awt.event.MouseListener)
111. java.awt.Component.removeMouseMotionListener(java.awt.event.MouseMotionListener)
112. java.awt.Component.removeMouseWheelListener(java.awt.event.MouseWheelListener)
113. java.awt.Component.removePropertyChangeListener(java.beans.PropertyChangeListener)
114. java.awt.Component.removePropertyChangeListener(java.lang.String,java.beans.PropertyChangeListener)
115. java.awt.Component.repaint()
116. java.awt.Component.repaint(int,int,int,int)
117. java.awt.Component.repaint(long)
118. java.awt.Component.resize(int,int)
119. java.awt.Component.resize(java.awt.Dimension)
120. java.awt.Component.setBounds(int,int,int,int)
121. java.awt.Component.setBounds(java.awt.Rectangle)
122. java.awt.Component.setCursor(java.awt.Cursor)
123. java.awt.Component.setDropTarget(java.awt.dnd.DropTarget)
124. java.awt.Component.setFocusTraversalKeysEnabled(boolean)
125. java.awt.Component.setFocusable(boolean)
126. java.awt.Component.setIgnoreRepaint(boolean)
127. java.awt.Component.setLocale(java.util.Locale)
128. java.awt.Component.setLocation(int,int)
129. java.awt.Component.setLocation(java.awt.Point)
130. java.awt.Component.setName(java.lang.String)
131. java.awt.Component.setSize(int,int)
132. java.awt.Component.setSize(java.awt.Dimension)
133. java.awt.Component.show()
134. java.awt.Component.show(boolean)
135. java.awt.Component.size()
136. java.awt.Component.toString()
137. java.awt.Component.transferFocus()
138. java.awt.Component.transferFocusBackward()
139. java.awt.Component.transferFocusUpCycle()
140. java.awt.Container.add(java.awt.Component,java.lang.Object)
141. java.awt.Container.add(java.awt.Component,java.lang.Object,int)
142. java.awt.Container.add(java.lang.String,java.awt.Component)
143. java.awt.Container.addContainerListener(java.awt.event.ContainerListener)
144. java.awt.Container.addPropertyChangeListener(java.beans.PropertyChangeListener)
145. java.awt.Container.addPropertyChangeListener(java.lang.String,java.beans.PropertyChangeListener)
146. java.awt.Container.areFocusTraversalKeysSet(int)
147. java.awt.Container.countComponents()
148. java.awt.Container.deliverEvent(java.awt.Event)
149. java.awt.Container.doLayout()
150. java.awt.Container.findComponentAt(int,int)
151. java.awt.Container.findComponentAt(java.awt.Point)
152. java.awt.Container.getComponent(int)
153. java.awt.Container.getComponentAt(int,int)
154. java.awt.Container.getComponentAt(java.awt.Point)
155. java.awt.Container.getComponentCount()
156. java.awt.Container.getComponentZOrder(java.awt.Component)
157. java.awt.Container.getComponents()
158. java.awt.Container.getContainerListeners()
159. java.awt.Container.getFocusTraversalKeys(int)
160. java.awt.Container.getFocusTraversalPolicy()
161. java.awt.Container.getLayout()
162. java.awt.Container.getMousePosition(boolean)
163. java.awt.Container.insets()
164. java.awt.Container.invalidate()
165. java.awt.Container.isAncestorOf(java.awt.Component)
166. java.awt.Container.isFocusCycleRoot()
167. java.awt.Container.isFocusCycleRoot(java.awt.Container)
168. java.awt.Container.isFocusTraversalPolicyProvider()
169. java.awt.Container.isFocusTraversalPolicySet()
170. java.awt.Container.layout()
171. java.awt.Container.list(java.io.PrintStream,int)
172. java.awt.Container.list(java.io.PrintWriter,int)
173. java.awt.Container.locate(int,int)
174. java.awt.Container.minimumSize()
175. java.awt.Container.paintComponents(java.awt.Graphics)
176. java.awt.Container.preferredSize()
177. java.awt.Container.printComponents(java.awt.Graphics)
178. java.awt.Container.removeContainerListener(java.awt.event.ContainerListener)
179. java.awt.Container.setComponentZOrder(java.awt.Component,int)
180. java.awt.Container.setFocusCycleRoot(boolean)
181. java.awt.Container.setFocusTraversalPolicy(java.awt.FocusTraversalPolicy)
182. java.awt.Container.setFocusTraversalPolicyProvider(boolean)
183. java.awt.Container.transferFocusDownCycle()
184. java.awt.Container.validate()
185. java.lang.Object.equals(java.lang.Object)
186. java.lang.Object.getClass()
187. java.lang.Object.hashCode()
188. java.lang.Object.notify()
189. java.lang.Object.notifyAll()
190. java.lang.Object.wait()
191. java.lang.Object.wait(long)
192. java.lang.Object.wait(long,int)
193. javax.swing.AbstractButton.addActionListener(java.awt.event.ActionListener)
194. javax.swing.AbstractButton.addChangeListener(javax.swing.event.ChangeListener)
195. javax.swing.AbstractButton.addItemListener(java.awt.event.ItemListener)
196. javax.swing.AbstractButton.doClick()
197. javax.swing.AbstractButton.getAction()
198. javax.swing.AbstractButton.getActionCommand()
199. javax.swing.AbstractButton.getActionListeners()
200. javax.swing.AbstractButton.getChangeListeners()
201. javax.swing.AbstractButton.getDisabledIcon()
202. javax.swing.AbstractButton.getDisabledSelectedIcon()
203. javax.swing.AbstractButton.getDisplayedMnemonicIndex()
204. javax.swing.AbstractButton.getHideActionText()
205. javax.swing.AbstractButton.getHorizontalAlignment()
206. javax.swing.AbstractButton.getHorizontalTextPosition()
207. javax.swing.AbstractButton.getIcon()
208. javax.swing.AbstractButton.getIconTextGap()
209. javax.swing.AbstractButton.getItemListeners()
210. javax.swing.AbstractButton.getLabel()
211. javax.swing.AbstractButton.getMargin()
212. javax.swing.AbstractButton.getMnemonic()
213. javax.swing.AbstractButton.getModel()
214. javax.swing.AbstractButton.getMultiClickThreshhold()
215. javax.swing.AbstractButton.getPressedIcon()
216. javax.swing.AbstractButton.getRolloverIcon()
217. javax.swing.AbstractButton.getRolloverSelectedIcon()
218. javax.swing.AbstractButton.getSelectedIcon()
219. javax.swing.AbstractButton.getSelectedObjects()
220. javax.swing.AbstractButton.getText()
221. javax.swing.AbstractButton.getUI()
222. javax.swing.AbstractButton.getVerticalAlignment()
223. javax.swing.AbstractButton.getVerticalTextPosition()
224. javax.swing.AbstractButton.imageUpdate(java.awt.Image,int,int,int,int,int)
225. javax.swing.AbstractButton.isBorderPainted()
226. javax.swing.AbstractButton.isContentAreaFilled()
227. javax.swing.AbstractButton.isFocusPainted()
228. javax.swing.AbstractButton.isRolloverEnabled()
229. javax.swing.AbstractButton.removeActionListener(java.awt.event.ActionListener)
230. javax.swing.AbstractButton.removeChangeListener(javax.swing.event.ChangeListener)
231. javax.swing.AbstractButton.removeItemListener(java.awt.event.ItemListener)
232. javax.swing.AbstractButton.removeNotify()
233. javax.swing.AbstractButton.setAction(javax.swing.Action)
234. javax.swing.AbstractButton.setActionCommand(java.lang.String)
235. javax.swing.AbstractButton.setBorderPainted(boolean)
236. javax.swing.AbstractButton.setContentAreaFilled(boolean)
237. javax.swing.AbstractButton.setDisabledIcon(javax.swing.Icon)
238. javax.swing.AbstractButton.setDisabledSelectedIcon(javax.swing.Icon)
239. javax.swing.AbstractButton.setDisplayedMnemonicIndex(int)
240. javax.swing.AbstractButton.setFocusPainted(boolean)
241. javax.swing.AbstractButton.setHideActionText(boolean)
242. javax.swing.AbstractButton.setHorizontalAlignment(int)
243. javax.swing.AbstractButton.setHorizontalTextPosition(int)
244. javax.swing.AbstractButton.setIcon(javax.swing.Icon)
245. javax.swing.AbstractButton.setIconTextGap(int)
246. javax.swing.AbstractButton.setLabel(java.lang.String)
247. javax.swing.AbstractButton.setLayout(java.awt.LayoutManager)
248. javax.swing.AbstractButton.setMargin(java.awt.Insets)
249. javax.swing.AbstractButton.setMnemonic(char)
250. javax.swing.AbstractButton.setMnemonic(int)
251. javax.swing.AbstractButton.setMultiClickThreshhold(long)
252. javax.swing.AbstractButton.setPressedIcon(javax.swing.Icon)
253. javax.swing.AbstractButton.setRolloverEnabled(boolean)
254. javax.swing.AbstractButton.setRolloverIcon(javax.swing.Icon)
255. javax.swing.AbstractButton.setRolloverSelectedIcon(javax.swing.Icon)
256. javax.swing.AbstractButton.setSelectedIcon(javax.swing.Icon)
257. javax.swing.AbstractButton.setText(java.lang.String)
258. javax.swing.AbstractButton.setUI(javax.swing.plaf.ButtonUI)
259. javax.swing.AbstractButton.setVerticalAlignment(int)
260. javax.swing.AbstractButton.setVerticalTextPosition(int)
261. javax.swing.JComponent.addAncestorListener(javax.swing.event.AncestorListener)
262. javax.swing.JComponent.addNotify()
263. javax.swing.JComponent.addVetoableChangeListener(java.beans.VetoableChangeListener)
264. javax.swing.JComponent.computeVisibleRect(java.awt.Rectangle)
265. javax.swing.JComponent.contains(int,int)
266. javax.swing.JComponent.createToolTip()
267. javax.swing.JComponent.disable()
268. javax.swing.JComponent.enable()
269. javax.swing.JComponent.firePropertyChange(java.lang.String,boolean,boolean)
270. javax.swing.JComponent.firePropertyChange(java.lang.String,char,char)
271. javax.swing.JComponent.firePropertyChange(java.lang.String,int,int)
272. javax.swing.JComponent.getActionForKeyStroke(javax.swing.KeyStroke)
273. javax.swing.JComponent.getActionMap()
274. javax.swing.JComponent.getAlignmentX()
275. javax.swing.JComponent.getAlignmentY()
276. javax.swing.JComponent.getAncestorListeners()
277. javax.swing.JComponent.getAutoscrolls()
278. javax.swing.JComponent.getBaseline(int,int)
279. javax.swing.JComponent.getBaselineResizeBehavior()
280. javax.swing.JComponent.getBorder()
281. javax.swing.JComponent.getBounds(java.awt.Rectangle)
282. javax.swing.JComponent.getClientProperty(java.lang.Object)
283. javax.swing.JComponent.getComponentPopupMenu()
284. javax.swing.JComponent.getConditionForKeyStroke(javax.swing.KeyStroke)
285. javax.swing.JComponent.getDebugGraphicsOptions()
286. javax.swing.JComponent.getDefaultLocale()
287. javax.swing.JComponent.getFontMetrics(java.awt.Font)
288. javax.swing.JComponent.getGraphics()
289. javax.swing.JComponent.getHeight()
290. javax.swing.JComponent.getInheritsPopupMenu()
291. javax.swing.JComponent.getInputMap()
292. javax.swing.JComponent.getInputMap(int)
293. javax.swing.JComponent.getInputVerifier()
294. javax.swing.JComponent.getInsets()
295. javax.swing.JComponent.getInsets(java.awt.Insets)
296. javax.swing.JComponent.getListeners(java.lang.Class)
297. javax.swing.JComponent.getLocation(java.awt.Point)
298. javax.swing.JComponent.getMaximumSize()
299. javax.swing.JComponent.getMinimumSize()
300. javax.swing.JComponent.getNextFocusableComponent()
301. javax.swing.JComponent.getPopupLocation(java.awt.event.MouseEvent)
302. javax.swing.JComponent.getPreferredSize()
303. javax.swing.JComponent.getRegisteredKeyStrokes()
304. javax.swing.JComponent.getRootPane()
305. javax.swing.JComponent.getSize(java.awt.Dimension)
306. javax.swing.JComponent.getToolTipLocation(java.awt.event.MouseEvent)
307. javax.swing.JComponent.getToolTipText()
308. javax.swing.JComponent.getToolTipText(java.awt.event.MouseEvent)
309. javax.swing.JComponent.getTopLevelAncestor()
310. javax.swing.JComponent.getTransferHandler()
311. javax.swing.JComponent.getVerifyInputWhenFocusTarget()
312. javax.swing.JComponent.getVetoableChangeListeners()
313. javax.swing.JComponent.getVisibleRect()
314. javax.swing.JComponent.getWidth()
315. javax.swing.JComponent.getX()
316. javax.swing.JComponent.getY()
317. javax.swing.JComponent.grabFocus()
318. javax.swing.JComponent.isDoubleBuffered()
319. javax.swing.JComponent.isLightweightComponent(java.awt.Component)
320. javax.swing.JComponent.isManagingFocus()
321. javax.swing.JComponent.isOpaque()
322. javax.swing.JComponent.isOptimizedDrawingEnabled()
323. javax.swing.JComponent.isPaintingForPrint()
324. javax.swing.JComponent.isPaintingTile()
325. javax.swing.JComponent.isRequestFocusEnabled()
326. javax.swing.JComponent.isValidateRoot()
327. javax.swing.JComponent.paint(java.awt.Graphics)
328. javax.swing.JComponent.paintImmediately(int,int,int,int)
329. javax.swing.JComponent.paintImmediately(java.awt.Rectangle)
330. javax.swing.JComponent.print(java.awt.Graphics)
331. javax.swing.JComponent.printAll(java.awt.Graphics)
332. javax.swing.JComponent.putClientProperty(java.lang.Object,java.lang.Object)
333. javax.swing.JComponent.registerKeyboardAction(java.awt.event.ActionListener,java.lang.String,javax.swing.KeyStroke,int)
334. javax.swing.JComponent.registerKeyboardAction(java.awt.event.ActionListener,javax.swing.KeyStroke,int)
335. javax.swing.JComponent.removeAncestorListener(javax.swing.event.AncestorListener)
336. javax.swing.JComponent.removeVetoableChangeListener(java.beans.VetoableChangeListener)
337. javax.swing.JComponent.repaint(java.awt.Rectangle)
338. javax.swing.JComponent.repaint(long,int,int,int,int)
339. javax.swing.JComponent.requestDefaultFocus()
340. javax.swing.JComponent.requestFocus()
341. javax.swing.JComponent.requestFocus(boolean)
342. javax.swing.JComponent.requestFocusInWindow()
343. javax.swing.JComponent.resetKeyboardActions()
344. javax.swing.JComponent.reshape(int,int,int,int)
345. javax.swing.JComponent.revalidate()
346. javax.swing.JComponent.scrollRectToVisible(java.awt.Rectangle)
347. javax.swing.JComponent.setActionMap(javax.swing.ActionMap)
348. javax.swing.JComponent.setAlignmentX(float)
349. javax.swing.JComponent.setAlignmentY(float)
350. javax.swing.JComponent.setAutoscrolls(boolean)
351. javax.swing.JComponent.setBackground(java.awt.Color)
352. javax.swing.JComponent.setBorder(javax.swing.border.Border)
353. javax.swing.JComponent.setComponentPopupMenu(javax.swing.JPopupMenu)
354. javax.swing.JComponent.setDebugGraphicsOptions(int)
355. javax.swing.JComponent.setDefaultLocale(java.util.Locale)
356. javax.swing.JComponent.setDoubleBuffered(boolean)
357. javax.swing.JComponent.setFocusTraversalKeys(int,java.util.Set)
358. javax.swing.JComponent.setFont(java.awt.Font)
359. javax.swing.JComponent.setForeground(java.awt.Color)
360. javax.swing.JComponent.setInheritsPopupMenu(boolean)
361. javax.swing.JComponent.setInputMap(int,javax.swing.InputMap)
362. javax.swing.JComponent.setInputVerifier(javax.swing.InputVerifier)
363. javax.swing.JComponent.setMaximumSize(java.awt.Dimension)
364. javax.swing.JComponent.setMinimumSize(java.awt.Dimension)
365. javax.swing.JComponent.setNextFocusableComponent(java.awt.Component)
366. javax.swing.JComponent.setOpaque(boolean)
367. javax.swing.JComponent.setPreferredSize(java.awt.Dimension)
368. javax.swing.JComponent.setRequestFocusEnabled(boolean)
369. javax.swing.JComponent.setToolTipText(java.lang.String)
370. javax.swing.JComponent.setTransferHandler(javax.swing.TransferHandler)
371. javax.swing.JComponent.setVerifyInputWhenFocusTarget(boolean)
372. javax.swing.JComponent.setVisible(boolean)
373. javax.swing.JComponent.unregisterKeyboardAction(javax.swing.KeyStroke)
374. javax.swing.JComponent.update(java.awt.Graphics)
375. javax.swing.JMenu.add(java.awt.Component)
376. javax.swing.JMenu.add(java.awt.Component,int)
377. javax.swing.JMenu.add(java.lang.String)
378. javax.swing.JMenu.add(javax.swing.Action)
379. javax.swing.JMenu.add(javax.swing.JMenuItem)
380. javax.swing.JMenu.addMenuListener(javax.swing.event.MenuListener)
381. javax.swing.JMenu.addSeparator()
382. javax.swing.JMenu.applyComponentOrientation(java.awt.ComponentOrientation)
383. javax.swing.JMenu.doClick(int)
384. javax.swing.JMenu.getAccessibleContext()
385. javax.swing.JMenu.getComponent()
386. javax.swing.JMenu.getDelay()
387. javax.swing.JMenu.getItem(int)
388. javax.swing.JMenu.getItemCount()
389. javax.swing.JMenu.getMenuComponent(int)
390. javax.swing.JMenu.getMenuComponentCount()
391. javax.swing.JMenu.getMenuComponents()
392. javax.swing.JMenu.getMenuListeners()
393. javax.swing.JMenu.getPopupMenu()
394. javax.swing.JMenu.getSubElements()
395. javax.swing.JMenu.getUIClassID()
396. javax.swing.JMenu.insert(java.lang.String,int)
397. javax.swing.JMenu.insert(javax.swing.Action,int)
398. javax.swing.JMenu.insert(javax.swing.JMenuItem,int)
399. javax.swing.JMenu.insertSeparator(int)
400. javax.swing.JMenu.isMenuComponent(java.awt.Component)
401. javax.swing.JMenu.isPopupMenuVisible()
402. javax.swing.JMenu.isSelected()
403. javax.swing.JMenu.isTearOff()
404. javax.swing.JMenu.isTopLevelMenu()
405. javax.swing.JMenu.menuSelectionChanged(boolean)
406. javax.swing.JMenu.remove(int)
407. javax.swing.JMenu.remove(java.awt.Component)
408. javax.swing.JMenu.remove(javax.swing.JMenuItem)
409. javax.swing.JMenu.removeAll()
410. javax.swing.JMenu.removeMenuListener(javax.swing.event.MenuListener)
411. javax.swing.JMenu.setAccelerator(javax.swing.KeyStroke)
412. javax.swing.JMenu.setComponentOrientation(java.awt.ComponentOrientation)
413. javax.swing.JMenu.setDelay(int)
414. javax.swing.JMenu.setMenuLocation(int,int)
415. javax.swing.JMenu.setModel(javax.swing.ButtonModel)
416. javax.swing.JMenu.setPopupMenuVisible(boolean)
417. javax.swing.JMenu.setSelected(boolean)
418. javax.swing.JMenu.updateUI()
419. javax.swing.JMenuItem.addMenuDragMouseListener(javax.swing.event.MenuDragMouseListener)
420. javax.swing.JMenuItem.addMenuKeyListener(javax.swing.event.MenuKeyListener)
421. javax.swing.JMenuItem.getAccelerator()
422. javax.swing.JMenuItem.getMenuDragMouseListeners()
423. javax.swing.JMenuItem.getMenuKeyListeners()
424. javax.swing.JMenuItem.isArmed()
425. javax.swing.JMenuItem.processKeyEvent(java.awt.event.KeyEvent,javax.swing.MenuElement[],javax.swing.MenuSelectionManager)
426. javax.swing.JMenuItem.processMenuDragMouseEvent(javax.swing.event.MenuDragMouseEvent)
427. javax.swing.JMenuItem.processMenuKeyEvent(javax.swing.event.MenuKeyEvent)
428. javax.swing.JMenuItem.processMouseEvent(java.awt.event.MouseEvent,javax.swing.MenuElement[],javax.swing.MenuSelectionManager)
429. javax.swing.JMenuItem.removeMenuDragMouseListener(javax.swing.event.MenuDragMouseListener)
430. javax.swing.JMenuItem.removeMenuKeyListener(javax.swing.event.MenuKeyListener)
431. javax.swing.JMenuItem.setArmed(boolean)
432. javax.swing.JMenuItem.setEnabled(boolean)
433. javax.swing.JMenuItem.setUI(javax.swing.plaf.MenuItemUI)


最后，如果你知道某个类有更多的方法，请告诉我们。


