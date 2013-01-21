<?php
/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2013-01-21 at 11:04:07.
 */
class ValidFormTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var ValidForm
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new ValidForm;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers ValidForm::setSubmitLabel
     * @todo   Implement testSetSubmitLabel().
     */
    public function testSetSubmitLabel()
    {
        $strLabel = Random::string();
        $this->object->setSubmitLabel($strLabel);

        $this->assertEquals($strLabel, $this->object->getSubmitLabel());
    }

    /**
     * @covers ValidForm::getSubmitLabel
     * @todo   Implement testGetSubmitLabel().
     * @depends testSetSubmitLabel
     */
    public function testGetSubmitLabel()
    {
        $strLabel = Random::string();
        $this->object->setSubmitLabel($strLabel);

        $this->assertEquals($this->object->getSubmitLabel(), $strLabel);
    }

    /**
     * @covers ValidForm::addHtml
     * @todo   Implement testAddHtml().
     */
    public function testAddHtml()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers ValidForm::addNavigation
     * @todo   Implement testAddNavigation().
     */
    public function testAddNavigation()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers ValidForm::addFieldset
     * @todo   Implement testAddFieldset().
     */
    public function testAddFieldset()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers ValidForm::addHiddenField
     * @todo   Implement testAddHiddenField().
     */
    public function testAddHiddenField()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers ValidForm::renderField
     * @todo   Implement testRenderField().
     */
    public function testRenderField()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers ValidForm::addField
     * @todo   Implement testAddField().
     */
    public function testAddField()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers ValidForm::addParagraph
     * @todo   Implement testAddParagraph().
     */
    public function testAddParagraph()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers ValidForm::addArea
     * @todo   Implement testAddArea().
     */
    public function testAddArea()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers ValidForm::addMultiField
     * @todo   Implement testAddMultiField().
     */
    public function testAddMultiField()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers ValidForm::addJSEvent
     * @todo   Implement testAddJSEvent().
     */
    public function testAddJSEvent()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers ValidForm::toHtml
     * @todo   Implement testToHtml().
     */
    public function testToHtml()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers ValidForm::serialize
     * @todo   Implement testSerialize().
     */
    public function testSerialize()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers ValidForm::isSubmitted
     * @todo   Implement testIsSubmitted().
     */
    public function testIsSubmitted()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers ValidForm::getFields
     * @todo   Implement testGetFields().
     */
    public function testGetFields()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers ValidForm::getValidField
     * @todo   Implement testGetValidField().
     */
    public function testGetValidField()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers ValidForm::getInvalidFields
     * @todo   Implement testGetInvalidFields().
     */
    public function testGetInvalidFields()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers ValidForm::isValid
     * @todo   Implement testIsValid().
     */
    public function testIsValid()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers ValidForm::valuesAsHtml
     * @todo   Implement testValuesAsHtml().
     */
    public function testValuesAsHtml()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers ValidForm::fieldsetAsHtml
     * @todo   Implement testFieldsetAsHtml().
     */
    public function testFieldsetAsHtml()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers ValidForm::get
     * @todo   Implement testGet().
     */
    public function testGet()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }
}